某些编辑页面里有画出热区并通过鼠标拖动四周的小点点来缩放热区，这里简单实现了一下。       
首先在页面隐藏一个div(下称zoomdiv),这个div四周有小点，点击页面上的元素，这个div的位置（top,left）与宽高（width,height）被设置与被点击元素一样，并display:block。     
拖动元素：由于zoomdiv在被拖动元素的上方，所以实际拖动的是zoomdiv。改变zoomdiv的位置与宽高的时候同步改变下方元素的宽高。      
在页面上绘制矩形：当mousedown时，记录startX和startY(鼠标的其实位置)，并设置当前div的位置为startX,startY，当mousemove时，e.pageX-startX(鼠标实际位置-鼠标初始位置)，计算出被绘制出的div的宽高。     
最后当mouseup时取出绑定的mousedown事件。    
具体看代码。