
	var jC = function(){
		
		this.init=function(elname){
			//alert(elname);	
			this.mainEl = elname;
			var self = this;
			
			$(elname + ' li').each(function(){
				var i = $("img",this);
				//alert('aaaaaa');
				self.elems[self.numel] = i;
				//alert(i.css('width'));
				//self.setElement(self.numel,img);
				if(i.width() >0){
					$(this).css({/*'position':'absolute','top':'0','left':self.carouselWidth + 'px',*/'width':i.width() + 'px','height':'70px'/*,'float':'none'*/});
					self.carouselWidth += i.width()*1 + 5.0;
				}
				self.numel++;
			});
			if(self.carouselWidth > 0) $(elname + ' ul ').css({'width':self.carouselWidth +'px'});
			
			this.setButtons(elname);
			
		};
		this.setButtons = function(elname){
			var self = this;
			$(elname + " .next").click(function(){
				if(self.carouselWidth == 0){
					self.setWidth();
				}
				self.next();
				return false;
			});
			$(elname + " .prev").click(function(){
				
				self.prev();
				return false;
			});
		};
		this.setWidth = function(){
			var w=0;
			for(e in this.elems){
				w += (this.elems[e].width()*1 + 5.0);
				//alert(e + ' ' + w);
				
				//self.carouselWidth += i.width()*1 + 5.0;
				//self.numel++;
			}
			this.carouselWidth = w;
			$(this.mainEl + ' ul').css({'width':this.carouselWidth +'px'});
		};
		/*this.setElement = function(nm,img){
			this.elems[nm] = img;
			alert(nm + img.width());
		};*/
		this.prev = function(){
			//
			if(this.curEl == 1){return false;}
			else{
				var pls =this.elems[this.curEl-1].width() + 5;
				
				$(this.mainEl + ' ul').animate({"left":"+=" + pls + 'px'},200);
			}
			
			this.curEl--;
		};
		this.next = function(){
			//alert(' > ');
			if(this.curEl == this.elems.length-1){return false;}
			else{
				var mns = this.elems[this.curEl].width() + 5;
				//alert(mns);
				$(this.mainEl + ' ul').animate({"left":"-=" + mns + 'px'},200);
			}
			
			this.curEl++;
		};
		
		this.curEl=1;
		this.elems=[];
		this.numel=1;
		this.carouselWidth=0;
		this.mainEl='';
		
		return this;
	}