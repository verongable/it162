<?php include "includes/header.php"?>
    <p>No matter your profession, whether you’re a web designer, a photographer, or even a model, chances are you need to showcase your work in order to get clients. Once you have your own website, an effective way to accomplish this is by putting up an online image gallery. When building your gallery, it’s important to keep your design clean and minimalistic in order to not diminish the work you want to display. Luckily the gallery templates I have included are great for beginners because they are simple and easy to use, and only require HTML/CSS, making it a much more simple process in order to get your work displayed in an effective manner.</p>

    <h2>Simple Basic Grid Gallery with Hover Effect -</h2>
    <p>This type of image gallery uses a basic grid layout that is very easy to use and also attractive, making it suitable for an array of needs. This gallery also includes a beautiful hover effect.</p>
    <h3>How to Use:</h3>

    <p>Insert the main HTML code. Insert your images within each &lt;div class=&rdquo;container&rdquo;&gt;&lt;/div&gt; element.</p>

    <p>HTML:</p>
<pre><code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;h1&gt;Simple gallery pure css&lt;/h1&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;div class="container-all"&gt;
&lt;div class="container"&gt;
&lt;img src="https://bit.ly/2PvlS8Z" alt=""&gt;
&lt;span class="title"&gt;Lorem ipsum dolor&lt;/span&gt;
&lt;span class="text"&gt;Morbi diam viverra mattis sociis magna, habitasse penatibus non lectus&lt;/span&gt; <!-- this is where you place your images and title/text  -->
&lt;/div&gt;
&lt;div class="container"&gt;
&lt;img src="https://bit.ly/2PXNumM" alt=""&gt;
&lt;span class="title"&gt;Lorem ipsum dolor&lt;/span&gt;
&lt;span class="text"&gt;Morbi diam viverra mattis sociis magna, habitasse penatibus non lectus&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
  &lt;img src="https://bit.ly/2KbUszm" alt=""&gt;
  &lt;span class="title"&gt;Lorem ipsum dolor&lt;/span&gt;
  &lt;span class="text"&gt;Morbi diam viverra mattis sociis magna, habitasse penatibus non lectus&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
  &lt;img src="https://bit.ly/2FnhYul" alt=""&gt;
  &lt;span class="title"&gt;Lorem ipsum dolor&lt;/span&gt;
  &lt;span class="text"&gt;Morbi diam viverra mattis sociis magna, habitasse penatibus non lectus&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
  &lt;img src="https://bit.ly/2FznWrU" alt=""&gt;
  &lt;span class="title"&gt;Lorem ipsum dolor&lt;/span&gt;
  &lt;span class="text"&gt;Morbi diam viverra mattis sociis magna, habitasse penatibus non lectus&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
  &lt;img src="https://bit.ly/2zd3HLf" alt=""&gt;
  &lt;span class="title&gt;Lorem ipsum dolor&lt;/span&gt;
  &lt;span class="text"&gt;Morbi diam viverra mattis sociis magna, habitasse penatibus non lectus&lt;/span&gt;
  &lt;/div&gt;
</code></pre>

<p>Insert the main CSS code:</p>

<pre>@import url('https://fonts.googleapis.com/css?family=Poppins');
body, html{
  margin: 0;
  background: #2b2927;
  font-family: 'Poppins', sans-serif;
}
h1{
  text-align: center;
  color:white;
}
.container-all{
  width: fit-content;
  margin: 20px auto;
  height: auto;
}
.container{
  width: calc(33% - 6px);
  overflow:hidden;
  height: fit-content;
  margin:3px;
  padding: 0;
  display:block;
  position:relative;
  float:left;
}
img{
  width: 100%;
  transition-duration: .3s;
  max-width: 100%;
  display:block;
  overflow:hidden;
  cursor:pointer;
}
.title{
  position:absolute;
  display:block;
  cursor:pointer;
  top: 35%;
  display: none;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  font-weight: bold;
  font-size: 1.6em;
  text-shadow: 1px 5px 10px black;
  transition-duration: .3s;
}
.text{
  position:absolute;
  top: 70%;
  cursor:pointer;
  max-width: 80%;
 
 text-align:center;
  left: 50%;
  text-shadow: 1px 5px 10px black;
  font-size: 1em;
  display:none;
  margin-right: -50%;
  transition-duration: .3s;
  transform: translate(-50%, -50%) 
}
.container:hover img{
  transform: scale(1.2);
  transition-duration: .3s;
  filter: grayscale(50%);
  opacity: .7;
}
.container:hover span{
  color:white;
  display: block;
  transition-duration: .3s;
} /* these two change the hover effect */
@media only screen and (max-width: 900px) {
    .container {
        width: calc(50% - 6px);
    }
}
@media only screen and (max-width: 400px) {
    .container {
        width: 100%;
    }
}
</pre>

<h2>CSS Masonry Grid -</h2>

<p>This gallery is made by Joseph Shambrook that also uses a basic grid layout that uses a masonry style which is based on columns. This differs from other types of layouts because it doesn’t use fixed height rows. Sometimes this is referred to as “Pinterest Style."</p>

<h3>How to Use:</h3>

<p>Insert the main HTML code. Insert your images within each &lt;div class=&rdquo;item&rdquo;&gt;&lt;/div&gt; element.</p>

<code>&lt;div class=&quot;grid&quot;&gt;
  &lt;div class=&quot;item&quot; style=&quot;background-image: url(https://images.unsplash.com/photo-1439209306665-700c9bca794c?dpr=1&amp;auto=format&amp;fit=crop&amp;w=1500&amp;h=1000&amp;q=80&amp;cs=tinysrgb&amp;crop=)&quot;&gt;&lt;/div&gt; &lt;!-- this is where you place your images --&gt;
  
  &lt;div class=&quot;item&quot; style=&quot;background-image: url(https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=1&amp;auto=compress,format&amp;fit=crop&amp;w=1199&amp;h=871&amp;q=80&amp;cs=tinysrgb&amp;crop=)&quot;&gt;&lt;/div&gt;
  
  &lt;div class=&quot;item&quot; style=&quot;background-image: url(https://images.unsplash.com/photo-1488572384981-eac03dfeb6b9?dpr=1&amp;auto=compress,format&amp;fit=crop&amp;w=1199&amp;h=799&amp;q=80&amp;cs=tinysrgb&amp;crop=)&quot;&gt;&lt;/div&gt;
  
  &lt;div class=&quot;item&quot; style=&quot;background-image: url(https://images.unsplash.com/photo-1470091688026-38b51162c8df?dpr=1&amp;auto=compress,format&amp;fit=crop&amp;w=1199&amp;h=750&amp;q=80&amp;cs=tinysrgb&amp;crop=)&quot;&gt;&lt;/div&gt;
  
  &lt;div class=&quot;item&quot; style=&quot;background-image: url(https://images.unsplash.com/photo-1475139450941-3b6464b2dde3?dpr=1&amp;auto=compress,format&amp;fit=crop&amp;w=1199&amp;h=673&amp;q=80&amp;cs=tinysrgb&amp;crop=)&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code>

<p>Insert the main CSS code:</p>

<pre>.grid {
  display: grid;
  grid-template-rows: 
    repeat(4, 180px);
  grid-template-columns: 
    repeat(3, 1fr); /* insert number of rows and columns */
  grid-gap: 5px;
}

.item:nth-child(1) {
  grid-row: 1 / 4;
} /* changes how many rows/columns image takes up*/

.item:nth-child(2) {
  grid-column: 2 / 4;
  grid-row: 1 / 3;
}

.item:nth-child(3) {
  grid-column: 3 / 4;
  grid-row: 3 / 5;
}

.item:nth-child(4) {
  grid-column: 2 / 3;
  grid-row: 3 / 4;
}

.item:nth-child(5) {
  grid-column: 1 / 3;
  grid-row: 4 / 5;
}

/* styling code */

.grid {
  margin:20px auto;
  max-width:1000px;
}

.grid > .item {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</pre>

<h2>CSS Photo Gallery with Image Lightbox Support -</h2>

<p>This is also a gallery that uses a grid layout design, but this one allows you to click on and view large versions of your images using lightbox.</p>

<h3>How to Use:</h3>

<p>Insert the HTML for small images that will be used as thumbnails in the grid. Insert your images within each &lt;label for=&rdquo;&rdquo; class=&rdquo;grid-item&rdquo;&gt;&lt;/label&gt; element.</p>

<code>&lt;div class=&quot;grid&quot;&gt;
  &lt;label for=&quot;pic-1&quot; class=&quot;grid-item&quot;&gt;&lt;img src=&quot;1.jpg&quot;&gt;&lt;/label&gt;
  &lt;label for=&quot;pic-2&quot; class=&quot;grid-item&quot;&gt;&lt;img src=&quot;2.jpg&quot;&gt;&lt;/label&gt;
  &lt;label for=&quot;pic-3&quot; class=&quot;grid-item&quot;&gt;&lt;img src=&quot;3.jpg&quot;&gt;&lt;/label&gt;
  &lt;label for=&quot;pic-4&quot; class=&quot;grid-item&quot;&gt;&lt;img src=&quot;4.jpg&quot;&gt;&lt;/label&gt;
  &lt;label for=&quot;pic-5&quot; class=&quot;grid-item&quot;&gt;&lt;img src=&quot;5.jpg&quot;&gt;&lt;/label&gt;
&lt;/div&gt;
</code>

<p>Insert the HTML which will display thumbnails in a fullscreen lightbox. Insert your images within each &lt;label for=&rdquo;&rdquo; class=&rdquo;lightbox&rdquo;&gt;&lt;/label&gt; element.</p>

<code>&lt;input type=&quot;checkbox&quot; id=&quot;pic-1&quot;&gt;
&lt;label for=&quot;pic-1&quot; class=&quot;lightbox&quot;&gt;&lt;img src=&quot;large-1.jpg&quot;&gt;&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; id=&quot;pic-2&quot;&gt;
&lt;label for=&quot;pic-2&quot; class=&quot;lightbox&quot;&gt;&lt;img src=&quot;large-2.jpg&quot;&gt;&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; id=&quot;pic-3&quot;&gt;
&lt;label for=&quot;pic-3&quot; class=&quot;lightbox&quot;&gt;&lt;img src=&quot;large-3.jpg&quot;&gt;&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; id=&quot;pic-4&quot;&gt;
&lt;label for=&quot;pic-4&quot; class=&quot;lightbox&quot;&gt;&lt;img src=&quot;large-4.jpg&quot;&gt;&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; id=&quot;pic-5&quot;&gt;
&lt;label for=&quot;pic-5&quot; class=&quot;lightbox&quot;&gt;&lt;img src=&quot;large-5.jpg&quot;&gt;&lt;/label&gt;
</code>

<p>Insert the main CSS style needed for photo gallery:</p>

<pre>* {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

label[for] { cursor: pointer; }

.grid {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  background-color: #222;
  z-index: 0;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-align-items: flex-start;

  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-align-content: flex-start;
  -ms-flex-line-pack: start;
  align-content: flex-start;
  padding: 16px;
  overflow: auto;
  text-align: center;
  -webkit-transition: opacity .75s;
  transition: opacity .75s;
}

.grid .grid-item {
  width: 25%;
  display: inline-block;
  padding: 16px;
  opacity: .75;
  -webkit-transition: opacity .5s;
  transition: opacity .5s;
}

.grid .grid-item:hover { opacity: 1; }

@media screen and (max-width: 1024px) {

.grid .grid-item { width: 50%; }

}

@media screen and (max-width: 480px) {

.grid .grid-item { width: 100%; }

}

.grid img {
  max-width: 100%;
  max-height: 100%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
}
</pre>

<p>Finally, insert your CSS code for the lightbox images:</p>

<pre>input[type="checkbox"] { display: none; }

.lightbox {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  min-height: 100%;
  z-index: 1;
  overflow: auto;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: -webkit-transform .75s ease-out;
  transition: transform .75s ease-out;
}

.lightbox img {
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  max-width: 96%;
  max-height: 96%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
}

input[type="checkbox"]:checked + .lightbox {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

input[type="checkbox"]:checked ~ .grid { opacity: .125; }
</pre>

<p>I hope the galleries and instructions I have provided were easy to understand and have successfully guided you in designing a simple yet effective image gallery for your website that will be sure to dazzle all your clients.</p>

</section>
   <!-- END LEFT COL -->
   <!-- START RIGHT COL --> 
<aside>
    <h3>Sources:</h3>
    <p>Place sources here.</p>
    <p>Here's a website to help get you started, <a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830" target="_blank">https://business.tutsplus.com/articles/...</a></p>
   </aside>
   <!-- END RIGHT COL -->
   <?php include "includes/footer.php"?>
