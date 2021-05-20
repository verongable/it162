<?php include "includes/header.php"?>
    <p>As web design has developed over time, there have been various methods of organizing elements for a website. CSS Flexbox has become the latest way to create efficient layouts, making it a must know for every web developer and designer. If you are unfamiliar with using flexbox, hopefully this tutorial will help change that. But first I would like to establish the basics.
	So what is CSS Flexbox? Flexbox is short for flexible box and is a simple method for determining how page elements behave on a website. It uses flex containers, flex items, and direction of flow, allowing you to create adaptive designs. This method of designing layouts offers several advantages over older methods, like the ability to lay content in any direction, items can “flex” in size, allowing them to interact with the available space and align accordingly, and you can easily achieve equal-column layouts, regardless of the content inside the columns. 

    Create Your Flex Container

    Copy and paste HTML/CSS code. In order to define and control a flex container, you must use display: flex;. If no other rules are set, all children elements will become flex items, and will form horizontally, left to right. The width of each flex item will auto adjust to fit its container.</p>

    <h3>HTML:</h3>
	<pre><code>&lt;div class = flexcontainer&gt;
    &lt;pre&gt;&lt;div class = flexitem1 style=background-color:lightblue;&gt; test1 &lt;/div&gt;
    &lt;div class = flexitem2 style=background-color:lightgreen;&gt; test2 &lt;/div&gt;
    &lt;div class = flexitem3 style=background-color:lightslategray;&gt; test3 &lt;/div&gt;
    &lt;/div&gt;</code></pre>

    <p>CSS:
	<pre>.flexcontainer {
     		display:flex;
    } 
</pre></p>
<p>Define Flex Direction

    In order to move all flex items into a single column, add flex-direction: column; to your CSS code.
    <pre>
    CSS:
    .flexcontainer {
     display: flex;
     flex-direction: column;
    }
</pre></p>
<p>If you would like to reverse the column order of your flex items, you can add flex-direction: column-reverse; to your CSS code:
<pre>
    .flexcontainer {
     display: flex;
     flex-direction: column-reverse;
    }
</pre></p>
<p>If you would like to reverse the row order of your flex items, you can add flex-direction: row-reverse; to your CSS code:
    <pre>
    .flexcontainer {
     display: flex;
     flex-direction: row-reverse;
    }
</pre></p>
<p>Align and Justify Flex Items
	If you need your flex items aligned to the right, use this CSS code:
    <pre>.flexcontainer {
     	display: flex;
     	justify-content: flex-end;
    }
</pre></p>
<p>If you need your flex items centered, use this CSS code:
    <pre>.flexcontainer {
     display: flex;
     justify-content: center;
    }
</pre></p>
<p>If you need your flex items separated, use this CSS code:
    <pre>.flexcontainer {
     display: flex;
     justify-content: space-between;
    }
</pre></p>
<p>If you need your flex items centered both horizontally and vertically, use this CSS code:
    <pre>.flexcontainer {
     display: flex;
     justify-content: center;
     align-items: center;
    }
</pre></p>
<p>Wrapping

    This is used to resize items to fit into a single column or single row when a flex container isn’t big enough. By default, items may not wrap, so by using flex-wrap: wrap;, any overflowing flex items will become wrapped into the following line. 

    Use this CSS code to allow wrapping: 
    <pre>.flexcontainer {
     display: flex;
     flex-wrap: wrap;
    }
</pre></p>
<p>Use this CSS code to allow reverse wrapping (overflowing flex item(s) are moved to above line): 
    <pre>.flexcontainer {
     display: flex;
     flex-wrap: wrap-reverse;
    }
</pre></p>
<p>When there’s wrapping, to adjust the positioning of a flex item, use the following CSS code. Replace * with stretch, space-around, space-between, center, flex-end, or flex-start.

	CSS:
    <pre>.flexcontainer {
     display: flex;
     flex-wrap: wrap;
     align-content: *;
    }
</pre></p>
    <p>Expanding Flex Items

    Whenever there is any space leftover in a flex container, use flex-grow to change how each flex item fits within the available space. The default size of a flex item is 0. 

    To expand a flex item, use the following CSS code:
    <pre>.flexcontainer {
     display: flex;
    }
    .flexitem1 {
     flex-grow: 1;
     border: 3px solid;
    }
</pre></p>
    <p>When flex items are overflowing because of insufficient container space, use flex-shrink. Remember, the default size of a flex item is 0.

    CSS:
    <pre>.flexcontainer {
    	 display: flex;
    }
    .flexitem1 {
     	flex-shrink: 1;
     	border: 3px solid;
    }
</pre></p>
    <p>In order to set the exact size of each flex item, use flex-basis along with a percentage or absolute value. The default value is flex-basis: auto;

    CSS:
    <pre>.flexcontainer {
     display: flex;
    }
    .flexitem1 {
     flex-basis: 25%; /*percentage value*/
    }
    .flexitem2 {
     flex-basis: 50px; /*absolute value*/
    }
    .flexitem3 {
     flex-basis: 5px;
    }
</pre></p>
    <p>You can use flex-grow, flex-basis, and flex-shrink at the same time.

    CSS:
    <pre>.flexcontainer {
     display: flex;
    }
    .flexitem1 {
     flex: 2 1 100px;
    }
    .flexitem2 {
     5 1 5%;
    }
    .flexitem3 {
     flex: 1 5 5%;
    }
    </pre></p>
   <p>There are many ways of designing layouts, but using Flexbox is the simplest method of making responsive page elements. After going through this 5 step tutorial, hopefully you now have a better understanding of CSS Flexbox and have learned how easy it is to control elements within a layout to create dynamic web pages.</p>

</section>
   <!-- END LEFT COL -->
   <!-- START RIGHT COL --> 
<aside>
    <h3>Research Citations:</h3>
    <p>Place research resources here.</p>
   </aside>
   <!-- END RIGHT COL -->
   <?php include "includes/footer.php"?>
