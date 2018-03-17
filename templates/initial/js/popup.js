  var OP = (navigator.userAgent.indexOf('Opera') != -1) ? true : false;
  var IE = (navigator.userAgent.indexOf('MSIE') != -1 && !OP) ? true : false;
  var GK = (navigator.userAgent.indexOf('Gecko') != -1) ? true : false;
  var NN4 = document.layers;
  var DOM = document.getElementById;

  function TOOLTIP() {
    this.width = 100;
    this.bgColor = '#FFFFFF';
    this.textColor = '#000000';
    this.borderColor = '#000000';
    this.opacity = 100;
    this.cursorDistance = 5;
    this.text = '';
    this.height = 0;
    this.obj = 0;
    this.sobj = 0;
    this.active = false;

    this.create = function() {
      if(!this.sobj) this.init();

      var t = '<table border=0 cellspacing=0 cellpadding=4 width=' + this.width + ' bgcolor=' + this.bgColor + '><tr>' +
              '<td align=left><font color=' + this.textColor + '>' + this.text + '</font></td></tr></table>';

      if(NN4) {
        t = '<table border=0 cellspacing=0 cellpadding=1><tr><td bgcolor=' + this.borderColor + '>' + t + '</td></tr></table>';
        this.sobj.document.write(t);
        this.sobj.document.close();
      }
      else {
        this.sobj.border = '1px solid ' + this.borderColor;
        this.setOpacity();
        if(document.getElementById) document.getElementById('ToolTip').innerHTML = t;
        else document.all.ToolTip.innerHTML = t;
      }
      if(DOM) this.height = this.obj.offsetHeight;
      else if(IE) this.height = this.sobj.pixelHeight;
      else if(NN4) this.height = this.obj.clip.bottom;

      this.show();
    }

    this.init = function() {
      if(DOM) {
        this.obj = document.getElementById('ToolTip');
        this.sobj = this.obj.style;
      }
      else if(IE) {
        this.obj = document.all.ToolTip;
        this.sobj = this.obj.style;
      }
      else if(NN4) {
        this.obj = document.ToolTip;
        this.sobj = this.obj;
      }
    }

    this.show = function() {
      var ext = (document.layers ? '' : 'px');
      var left = mouseX;
      var top = mouseY;

      if(left + this.width + this.cursorDistance > winX) left -= this.width + this.cursorDistance;
      else left += this.cursorDistance;

      if(top + this.height + this.cursorDistance - scrTop > winY) top -= this.height;
      else top += this.cursorDistance;

      this.sobj.left = left + ext;
      this.sobj.top = top + ext;

      if(!this.active) {
        this.sobj.visibility = 'visible';
        this.active = true;
      }
    }

    this.hide = function() {
      if(this.sobj) this.sobj.visibility = 'hidden';
      this.active = false;
    }

    this.setOpacity = function() {
      this.sobj.filter = 'alpha(opacity=' + this.opacity + ')';
      this.sobj.mozOpacity = '.1';
      if(this.obj.filters) this.obj.filters.alpha.opacity = this.opacity;
      if(!document.all && this.sobj.setProperty) this.sobj.setProperty('-moz-opacity', this.opacity / 100, '');
    }
  }

  var tooltip = mouseX = mouseY = winX = winY = scrTop = 0;

  if(document.layers) {
    document.write('<layer id="ToolTip"></layer>');
    document.captureEvents(Event.MOUSEMOVE);
  }
  else document.write('<div id="ToolTip" style="position:absolute; z-index:69"></div>');
  document.onmousemove = getMouseXY;

  function getMouseXY(e) {
    if(document.body && document.body.scrollTop >= 0) scrTop = document.body.scrollTop;
    else if(window.pageYOffset >= 0) scrTop = window.pageYOffset;

    if(IE) {
      mouseX = event.clientX + document.body.scrollLeft;
      mouseY = event.clientY + document.body.scrollTop;
    }
    else {
      mouseX = e.pageX;
      mouseY = e.pageY;
    }

    if(mouseX < 0) mouseX = 0;
    if(mouseY < 0) mouseY = 0;

    if(GK || NN4) {
      winX = window.innerWidth - 25;
      winY = window.innerHeight;
    }
    else if(DOM) {
      winX = document.body.offsetWidth - 25;
      winY = document.body.offsetHeight;
    }
    else {
      winX = screen.width - 25;
      winY = screen.height;
    }
    if(tooltip && tooltip.active) tooltip.show();
  }

  function toolTip(text, width, opacity) {
    if(text) {
      tooltip = new TOOLTIP();
      tooltip.text = text;
      if(width) tooltip.width = width;
      if(opacity) tooltip.opacity = opacity;
      tooltip.create();
    }
    else if(tooltip) tooltip.hide();
  }


