<?php 
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>
<head>
  <title>IronWareEngine Documentation</title>
</head>

<body>
  <ul class="nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="doc.php">Documentation</a></li>
  <li><a href="community.php">Community</a></li>
  <li><a href="download.php">Download</a></li>
  <li  class="dropdown"><a href="javascript:void(0)" class="dropbtn"><?php echo $user_data['user_name']; ?></a>
    <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="#">Settings</a>
          <a href="transaction. php">Transaction</a>
          <a href="logout.php">Logout</a>

      </div>
      </li>
</ul>

  

  <nav id="navbar">
  <!-- Navigation Bar -->
    <br>
  <br>
  <br>
  <br>
    <header>IronWareEngine Documentation</header>
    <ul>

      <a class="nav-link" href="#Introduction" rel="internal"><li>Introduction</li></a>
      <a class="nav-link" href="#Responsive_Web_Design" rel="internal"><li>Responsive Web Design</li></a>
      <a class="nav-link" href="#Basic_HTML_and_HTML5" rel="internal"><li>Basic HTML and HTML5</li></a>
      <a class="nav-link" href="#Basic_CSS" rel="internal"><li>Code</li></a>
      <!--
      <a class="nav-link" href="#Applied_Visual_Design" rel="internal"><li>Applied Visual Design</li></a>
      <a class="nav-link" href="#Applied_Accessibility" rel="internal"><li>Applied Accessibility</li></a>
      <a class="nav-link" href="#Responsive_Web_Design_Principles" rel="internal"><li>Responsive Web Design Principles</li></a>
      <a class="nav-link" href="#CSS_Flexbox" rel="internal"><li>CSS Flexbox</li></a>
      -->
      <a class="nav-link" href="#References" rel="internal"><li>References</li></a>
    </ul>
  </nav>
  
  <main id="main-doc"> <!-- Main Document Div Container -->
    <section class="main-section" id="Introduction"> <!-- Introduction Container -->
      <header><u>Introduction</u></header> 
      <article>
        <p>freeCodeCamp is a nonprofit, open sourced organization that acts as an interactive learning platform to teach anyone how to code multiple programming languages. fCC also comprises of an online community forum and chat rooms to further support their friendly learning environment. The lessons start out with tutorials and instructional programming and advance to personal projects and have the students be a part of other nonprofits to build web applications. With all of these tools and resources available the students gain practical developer experience and knowledge.</p>
        <p>Launched in October of 2014, freeCodeCamp was founded by the great Quincy Larson. Quincy is a software developer who took up programming after graduate school and used these skills to create fCC. His vision was a way for pupils to have the tools to advance from beginners to job ready developers.<a name="1_back_to_top"></a><a class="super" href="#1" rel="internal"><sup>[1]</sup></a></p>
        <p>By the Facts/Numbers<a name="2_back_to_top"></a><a class="super" href="#2" rel="internal"><sup>[2]</sup></a></p>
        <li>Languages offered: HTML5, CSS3, JavaScript, jQuery, Bootstrap, Sass, React.js, Node.js, Express.js, MongoDB, and Git to name a few</li>
        <li>1,500+ Campsites or local meetup groups that campers can attend to recieve/offer help</li>
        <li>2,080+ hours of coding lessons offered</li>
        <li>800+ hours of nonprofit working expierence</li>
        <li>6 Certificates can be earned for completing each section</li>
        <li>840,000+ Registered Campers</li>
        <li>400,000+ Active Campers each month</li>
        <li>$1,400,000+ donated in pro-bono code</li>
        <li>4,000+ Campers recieved their first developer job</li>
        <li>5,000+ Campers recieved a better developer job</li>
      </article>
    </section>
    <br>
    <section class="main-section" id="Responsive_Web_Design"> <!-- Responsive Web Design Container -->
      <header><u>Responsive Web Design</u></header>
      <article>
        <p>Responsive web design suggests that the approach of designing and developing a website should repond to the user's behavior and enviornment based on platform, orientation and screen size. The practice consists of a well organized HTML structure and a mix of flexible grids, customizable layouts and images of intelligent use of CSS and it's media queries. For example, as a user switches from a laptop to a tablet or phone, the website will automatically switch media to accommodate for resolution, image size and scripting abiliities. To put simply, the website will have the technology to automatically respond to the user's preferences and different devices. This eliminates the need for multiple different design and development phases for each new gadget that is new to the market.<a name="3_back_to_top"></a><a class="super" href="#3" rel="internal"><sup>[3]</sup></a></p>
        <div>
          <img src="https://www.smashingmagazine.com/wp-content/uploads/2010/11/sizes.jpg" alt="A depection of the different sizes of devices that responsive web design needs to account for."/>
          <div class="caption">Screens come in many resolutions and sizes that responsive web design needs to take account for.</div>
        </div>
        <p>Now that you are familiar with what freeCodeCamp and responsive web design are and have to offer, this article will reference the main sections of responsive web design taken from the beta version of freeCodeCamp. If you're ever stuck or you forget what that certain element tag is used for this technical document is here to assist you!</p>
      </article>
    </section>
    <br>
    <section class="main-section" id="Basic_HTML_and_HTML5"> <!-- Basic HTML and HTML5 Container -->
      <header><u>Basic HTML and HTML5</u></header>
      <article>
        <p>Hyper Text Markup Language, or better known as HTML, is a markup language to describe the structure of a web page much like a skeleton of a human body. An array of unique syntax of elements are used to organize and give information about the content to the web browser. Opening and closing tags are used on elements that surround content and gives meaning to it. There are different element tags that have different functions and uses that could include paragraphs, headers, links or lists.<a name="4_back_to_top"></a><a class="super" href="#4" rel="internal"><sup>[4]</sup></a></p>
        <p>This section references how to use HTML elements to give structure and meaning to your web content. Listed below are the topics covered for HTML and HTML5.</p>
        <li style="list-style: none;"><a class="html" href="#the_declaration" rel="internal">The Declaration</a> | <a class="html" href="#comments" rel="internal">Comments</a> | <a class="html" href="#the_head" rel="internal">The Head</a> | <a class="html" href="#the_main_body" rel="internal">The Main/Body</a> | <a class="html" href="#headings" rel="internal">Headings</a> | <a class="html" href="#paragraphs" rel="internal">Paragraphs</a> | <a class="html" href="#lists" rel="internal">Lists</a> | <a class="html" href="#divs" rel="internal">Divs</a> | <a class="html" href="#images_video" rel="internal">Images/Video</a> | <a class="html" href="#anchors" rel="internal">Anchors</a> | <a class="html" href="#forms" rel="internal">Forms</a> | <a class="html" href="#buttons" rel="internal">Buttons</a></li>
        <br>
        <h2 id="the_declaration">The Declaration</h2>
        <p>At the start of your coding document you need to declare the language being used so the browser knows what version of HTML you're using and is able to read it. Most major browsers now support the latest installment, HTML5. Below is how you declare the language, in this case it'll be HTML5. This version is declared with the &lt;!DOCTYPE html&gt; tag. Don't forget the &lt;html&gt; tags that wrap around your html code!<a name="5_back_to_top"></a><a class="super" href="#5" rel="internal"><sup>[5]</sup></a></p>
          <code>
&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    ... &lt;!-- Your code here --&gt;
  &lt;/html&gt;
          </code>
        <br>
        <h2 id="comments">Comments</h2>
        <p>Comments are a way to leave notes and reminders about the code for yourself or another programmer so they understand quickly what they are reading. Comments don't affect the code itself, they appear within the typed code but are not generated on the page. It's also a convenient way to make code inactive without having to delete it. Comments start with an opening tag of &lt;!-- and close with a --&gt; when finished.<a name="6_back_to_top"></a><a class="super" href="#6" rel="internal"><sup>[6]</sup></a></p>
        <code>
&lt;!-- This is a single line comment --&gt;
        
&lt;!-- This is a 
multiple line comment --&gt;
        
&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt; &lt;!-- Main Body --&gt;
      &lt;div&gt; &lt;!-- Header Container --&gt;
        &lt;h1&gt;Hello World!&lt;/h1&gt; &lt;!-- Heading Option 1 --&gt;
        &lt;!-- &lt;h2&gt;Hello World!&lt;/h2&gt; Heading Option 2 --&gt;
      &lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
        </code>
        <br>
        <h2 id="the_head">The Head</h2>
        <p>Any markup with information about your page would go into the head tag, which is essentially the header of the page. Metadata elements such as the &lt;link&gt; ,&lt;meta&gt; ,&lt;title&gt; , and &lt;style&gt; usually go inside the &lt;head&gt; element.</p>
        <code>
&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;...&lt;/title&gt; &lt;!-- Your title here --&gt;
      &lt;link...&gt; &lt;!-- Your link here --&gt;
    &lt;/head&gt;
  &lt;/html&gt;
        </code>
        <br>
        <h2 id="the_main_body">The Main/Body</h2>
        <p>All markups containing content that make up the page would go into the main or the body tag. The body element acts as the body of all of the content of the page while the main element is inside of the body and contains the page's main content. All elements not part of the header or footer usually go inside one of these elements.<a name="7_back_to_top"></a><a class="super" href="#7" rel="internal"><sup>[7]</sup></a></p>
        <code>
&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      ... &lt;!-- Your metadata here --&gt;
    &lt;/head&gt;
    &lt;body&gt;
      ... &lt;!-- Some content here --&gt;
      &lt;main&gt;
        ... &lt;!-- Main content here --&gt;
      &lt;/main&gt;
      ... &lt;!-- Maybe some more content here --&gt;
    &lt;/body&gt;
  &lt;/html&gt;
        </code>
        <br>
        <h2 id="headings">Headings</h2>
        <p>The heading element tells the browser about the structure of the website. &lt;h1&gt; elements are often used for main headings as they are largest of the headings. &lt;h2&gt; through &lt;h6&gt; elements are generally used for subheadings to indicate different or new sections of your content.<a name="8_back_to_top"></a><a class="super" href="#8" rel="internal"><sup>[8]</sup></a></p>
        <code id="heading_code">
&lt;h1&gt;Heading 1&lt;/h1&gt;<h1>Heading 1</h1>
&lt;h2&gt;Heading 2&lt;/h2&gt;<h2>Heading 2</h2>
&lt;h3&gt;Heading 3&lt;/h3&gt;<h3>Heading 3</h3>
&lt;h4&gt;Heading 4&lt;/h4&gt;<h4>Heading 4</h4>
&lt;h5&gt;Heading 5&lt;/h5&gt;<h5>Heading 5</h5>
&lt;h6&gt;Heading 6&lt;/h6&gt;<h6>Heading 6</h6>
        </code>
        <br>
        <h2 id="paragraphs">Paragraphs</h2>
        <p>Paragraphs are the preferred element for communicating text on websites. Just like in real writing, &lt;p&gt; tags organize and contain the meaning of the content within the body of the page.<a name="9_back_to_top"></a><a class="super" href="#9" rel="internal"><sup>[9]</sup></a></p>
        <code>
&lt;body&gt;
  &lt;main&gt;
    &lt;h1&gt;Your Title Here&lt;/h1&gt;
      &lt;p&gt;This is a paragraph. Your content and talking points go here.&lt;/p&gt;
  &lt;/main&gt;
&lt;/body&gt;
        </code>
        <br>
        <h2 id="lists">Lists</h2>
        <p>There are special elements that let you create lists and there are two kinds of lists that can be made. Unordered lists use the &lt;ul&gt; tag and is a general list that includes bullet points. An ordered list uses the &lt;ol&gt; tag and is used for instructions or anything that needs listed by steps or in a particular order. Don't forget each item in either list set needs a &lt;li&gt; tag to be recorded!<a name="10_back_to_top"></a><a class="super" href="#10" rel="internal"><sup>[10]</sup></a><a name="11_back_to_top"></a><a class="super" href="#11" rel="internal"><sup>[11]</sup></a></p>
        <code>
&lt;main&gt;
  &lt;h1&gt;Your Title Here&lt;/h1&gt;
    &lt;ul&gt;  &lt;!-- Unordered List --&gt;
      &lt;li&gt;List item a&lt;/li&gt;
      &lt;li&gt;List item b&lt;/li&gt;
      &lt;li&gt;List item c&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ol&gt;  &lt;!-- Ordered List --&gt;
      &lt;li&gt;List item 1&lt;/li&gt;
      &lt;li&gt;List item 2&lt;/li&gt;
      &lt;li&gt;List item 3&lt;/li&gt;
    &lt;/ol&gt;
&lt;/main&gt;
        </code>
        <br>
        <h2 id="divs">Divs</h2>
        <p>The &lt;div&gt; element, also known as the division element, is a general purpose container to contain and organize other elements of the page. &lt;div&gt; is the most commonly used HTML element because of its versatility. Other container elements were introduced with the induction of HTML5. These have more specific uses throughout the page, they include the &lt;header&gt;, &lt;nav&gt;, &lt;section&gt;, &lt;article&gt;, &lt;aside&gt; and &lt;footer&gt; elements. Below is an example of how these would typically be inputed.<a name="12_back_to_top"></a><a class="super" href="#12" rel="internal"><sup>[12]</sup></a></p>
        <code>
&lt;body&gt;
  &lt;header&gt; 
    ...  &lt;!-- Header contains title info --&gt;
  &lt;/header&gt;
  &lt;main&gt;
    &lt;nav&gt;
      ...  &lt;!-- Nav contains navigation links --&gt;    
    &lt;/nav&gt;
    &lt;aside&gt;
      ...  &lt;!-- Aside contains side info and/or links --&gt;    
    &lt;/aside&gt;
    &lt;section&gt; 
      ...   &lt;!-- Section contains a main part of the page --&gt;
      &lt;article&gt;
        ...  &lt;!-- Article contains worded content --&gt;    
      &lt;/article&gt;
    &lt;/section&gt;
  &lt;/main&gt;
  &lt;footer&gt;
    ...   &lt;!-- Footer contains copyright info and links --&gt;      
  &lt;/footer&gt;
&lt;/body&gt;
        </code>
        <br>
        <h2 id="images_video">Images/Video</h2>
        <p>Images can be added to a website using the &lt;img&gt; element. This element uses the src attribute to specify the images URL to grab the media and display it on the page. The tag is self closing, so a closing tag is not needed for this one. All image elements must have an alt attribute, which is used for screen readers to improve accessibility and is displayed if the image fails to load. Below is an example of how to do this.<a name="13_back_to_top"></a><a class="super" href="#13" rel="internal"><sup>[13]</sup></a></p>
        <code>
&lt;img src="https://www.the-images-URL-goes-here.com" alt="Text explaining what the image is."&gt;        
        </code>
        <p>Video clips can also be added to a website using the &lt;video&gt; element. Unlike the &lt;img&gt;, video uses a separate &lt;source&gt; tag that retrives the video's URL to be played. Videos also use height and width attributes within the &lt;video&gt; tag. Other optional attributes that can be added are controls, which allow the user to pause, play, increase/decrease the volume, etc, and autoplay which allows the video to automatically play when the user sees it on the page. Don't forget to add the type of video that is playing! The main types of video are mp4, webm and ogg. Below is how you would set up video in HTML.</p>
        <code>
&lt;video width="width-here" height="height-here" controls autoplay&gt;
  &lt;source src="https://www.video-url-goes-here.com" type="video/mp4"&gt;
  &lt;!-- Replace mp4 with webm or ogg when appropriate --&gt;
&lt;/video&gt;
        </code> 
        <br>
        <h2 id="anchors">Anchors</h2>
        <p>Anchor elements, &lt;a&gt;, are used to link to content internally or externally from the current page. The href attribute is used to call the URL that links to what you want. There are many ways anchors can be used on the page, here are some examples.<a name="14_back_to_top"></a><a class="super" href="#14" rel="internal"><sup>[14]</sup></a><a name="15_back_to_top"></a><a class="super" href="#15" rel="internal"><sup>[15]</sup></a><a name="16_back_to_top"></a><a class="super" href="#16" rel="internal"><sup>[16]</sup></a><a name="17_back_to_top"></a><a class="super" href="#17" rel="internal"><sup>[17]</sup></a></p>
        <code>
&lt;!-- Anchor words to an external link --&gt;
&lt;a href="https://www.link-url-goes-here.com"&gt;External Link&lt;/a&gt;
          
&lt;!-- Anchor that uses the target attribute to open up the link in a new tab --&gt;
&lt;a href="https://www.link-url-goes-here.com" target="_blank"&gt;External Link in a New Tab&lt;/a&gt;
          
&lt;!-- Anchor an image to an external link --&gt;
&lt;a href="https://www.link-url-goes-here.com"&gt;&lt;img src="https://www.image-url-goes-here.com" alt="Image description goes here"&gt;&lt;/a&gt;
          
&lt;!-- Anchor to jump to an internal section on the page --&gt;
&lt;a href="#internal-section"&gt;Jump to internal section&lt;/a&gt;
&lt;!-- On the section you want to jump to, add this line of code --&gt;
&lt;a name="internal-section"&gt;&lt;/a&gt;
          
&lt;!-- Anchor with a dead link (#) for when stucture of the page is still needed without the specific URL yet --&gt;
&lt;a href="#"&gt;Dead Link&lt;/a&gt;
        </code>
        <br>
        <h2 id="forms">Forms</h2>
        <p>Web forms are a way to collect data and send them to a server using just HTML. These are useful for surveys and anything that involves inputs from a user. Here is how a web form is set up with different inputs types.<a name="18_back_to_top"></a><a class="super" href="#18" rel="internal"><sup>[18]</sup></a><a name="19_back_to_top"></a><a class="super" href="#19" rel="internal"><sup>[19]</sup></a><a name="20_back_to_top"></a><a class="super" href="#20" rel="internal"><sup>[20]</sup></a><a name="21_back_to_top"></a><a class="super" href="#21" rel="internal"><sup>[21]</sup></a><a name="22_back_to_top"></a><a class="super" href="#22" rel="internal"><sup>[22]</sup></a></p>
        <code>
&lt;!-- This is the form element. This directs the data to a server. --&gt;
&lt;form action="https://www.send-data-to-this-server.com"&gt;&lt;/form&gt;
          
&lt;!-- Within forms, inputs can be placed to collect data. Here is a text field with a placeholder the user can see in the field. Filling out the field can be optional by adding required. --&gt;
&lt;form action="https://www.send-data-to-this-server.com"&gt;&lt;input type="text" placeholder="Enter Text Here" required&gt;&lt;/form&gt;
          
&lt;!-- How will the page know to accept the data? With a submit button of course. --&gt;
&lt;form action="https://www.send-data-to-this-server.com"&gt;
  &lt;input type="text placeholder="Enter Text Here" required&gt;
  &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
        </code>
        <br>
        <h2 id="buttons">Buttons</h2>
        <p>Buttons are another way of collecting data from a user who is prompted with a set of options to input. These can come in a variety of styles, the submit type was shown in the form section. The &lt;label&gt; element is used to nest the buttons in. A name attribute is used to correlate the button with the sent data in a form. How to set up a set of buttons on a page is shown below.<a name="23_back_to_top"></a><a class="super" href="#23" rel="internal"><sup>[23]</sup></a><a name="24_back_to_top"></a><a class="super" href="#24" rel="internal"><sup>[24]</sup></a><a name="25_back_to_top"></a><a class="super" href="#25" rel="internal"><sup>[25]</sup></a></p>
        <code>
&lt;!-- Radio: round buttons that are filled when selected --&gt;
&lt;label&gt;
  &lt;input type="radio" name="option1-option2"&gt;Option 1
  &lt;input type="radio" name="option1-option2"&ft;Option 2
&lt;/label&gt;
          
&lt;!-- Checkbox: square buttons that can be checked/unchecked --&gt;
&lt;label&gt;
  &lt;input type="checkbox" name="check1-check2"&gt;Check 1
  &lt;input type="checkbox" name="check1-check2"&gt;Check 2
&lt;/label&gt;
          
&lt;!-- Both radio and checkboxes can be preselected by adding checked --&gt;
  &lt;label&gt;
    &lt;input type="radio" name="option1-check2" checked&gt;Option 1
    &lt;input type="checkbox" name"option1-check2" checked&gt;Check 2
  &lt;/label&gt;
        </code>
      </article>
    </section>
    <section class="main-section" id="Basic_CSS"> <!-- Basic CSS Container -->
      <header><u>Code Part</u></header>
      <article>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat commodi ad excepturi id expedita cupiditate repellendus possimus unde culpa! Eius.<a name="26_back_to_top"></a><a class="super" href="#26" rel="internal"><sup>[26]</sup></a></p>
        <p></p>
        <li style="list-style: none;"><a class="css" href="#styling" rel="internal">Class Drawable</a> | <a class="css" href="#import" rel="internal">Import</a> | <a class="css" href="#units" rel="internal">Units</a> | <a class="css" href="#csscomments" rel="internal">Comments</a> | <a class="css" href="#colors" rel="internal">Colors</a> |<a class="css" href="#fonts" rel="internal">Fonts</a> | <a class="css" href="#images" rel="internal">Images</a> | <a class="css" href="#borders" rel="internal">Borders</a> | <a class="css" href="#background" rel="internal">Background</a> | <a class="css" href="#padding" rel="internal">Padding</a> | <a class="css" href="#margin" rel="internal">Margin</a></li>
        <br>
        <h2 id="styling">Class Drawable</h2>
        <p>created bindable abstract class and its child classes, also drawable<a name="27_back_to_top"></a><a class="super" href="#27" rel="internal"><sup>[27]</sup></a><a name="28_back_to_top"></a><a class="super" href="#28" rel="internal"><sup>[28]</sup></a><a name="29_back_to_top"></a><a class="super" href="#29" rel="internal"><sup>[29]</sup></a><a name="30_back_to_top"></a><a class="super" href="#30" rel="internal"><sup>[30]</sup></a><a name="31_back_to_top"></a><a class="super" href="#31" rel="internal"><sup>[31]</sup></a></p>
       
        <code>
class Drawable
{
public:
  Drawable() = default;
  Drawable( const Drawable& ) = delete;
  virtual DirectX::XMMATRIX GetTransformXM() const noexcept = 0;
  void Draw( Graphics & gfx ) const noexcept( !IS_DEBUG );
  virtual void Update( float dt ) noexcept = 0;
  void AddBind( std::unique_ptr<Bindable> bind ) noexcept( !IS_DEBUG );
  void AddIndexBuffer( std::unique_ptr<class IndexBuffer> ibuf ) noexcept;
  virtual ~Drawable() = default;

private:
  const IndexBuffer* pIndexBuffer = nullptr;
  std::vector<std::unique_ptr<Bindable>> binds;
};         
        </code>
        <br>
        <h2 id="import">Import</h2>
        <p>Using import in CSS is very similar to using the &lt;link&gt; element in HTML. One of the basic uses of it, just like the &lt;link&gt; element, is to import a font family more than likely from Google. Shown below is an example of importing the Google font Open Sans.<a name="32_back_to_top"></a><a class="super" href="#32" rel="internal"><sup>[32]</sup></a></p>
        <code>
&lt;style&gt;
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
&lt;/style&gt;          
        </code>
        <br>
        <h2 id="units">Units</h2>
        <p>There are two main types of units that measure length, absolute and relative. Pixels are a type of relative length unit, mostly used for screen resolutions and sizing, that tells the browser how to size or space an object. This is the most widely used unit, but there are more units that can be used. Em or rem are more relative length units that are relative to another length. Ems are based on the size of an element's font. Absolute units are tied to a physical unit of length such as inches (in) and millimeters (mm).<a name="33_back_to_top"></a><a class="super" href="#33" rel="internal"><sup>[33]</sup></a></p>
        <code>
&lt;style&gt;
  html {
    color: black;
    width: 1000px;  /* Pixels */
    length: 10in; /* Inches */
    font-size: 2em; /* Ems */      
    line-height: 1rem; /* Rems */      
}
&lt;/style&gt;          
        </code>
        <br>
        <h2 id="csscomments">Comments</h2>
        <p>Like in HTML, comments are a way to leave notes and reminders about the code for yourself or another programmer so they understand quickly what they are reading. They are also used to prevent the browser from interpreting parts of the style sheet. Comments start with an opening tag of /* and close with a */ when finished.<a name="34_back_to_top"></a><a class="super" href="#34" rel="internal"><sup>[34]</sup></a></p>
        <code>
&lt;style&gt;          
/* This is a single line comment */
          
/* This is a
multiple line comment */
&lt;/style&gt;          
        </code>
        <br>
        <h2 id="colors">Colors</h2>
        <p>The color of text, backgrounds, objects, borders, you name it can be colored with CSS. The main colors, such as red, blue, green, etc can be declared by simply inputing those in your CSS code. Another method for declaring a color is using the colors hexadecimal code, or hex number. Hex code gives the user a huge range of colors to use and is done by using the hash symbol (#) followed by six numbers and letters. An abbriviated version can also be used by the hash symbol followed by only three numbers and letters, however, this will yield a smaller group of colors. Another way to represent colors in CSS is by using RGB values. RGB uses three numbers from 0 to 255 that measures and mixes the three primary colors to make all of the colors. There is a lot that can be covered and said about colors using CSS so additional references are posted to further explore this vast topic.<a name="35_back_to_top"></a><a class="super" href="#35" rel="internal"><sup>[35]</sup></a><a name="36_back_to_top"></a><a class="super" href="#36" rel="internal"><sup>[36]</sup></a><a name="37_back_to_top"></a><a class="super" href="#37" rel="internal"><sup>[37]</sup></a><a name="38_back_to_top"></a><a class="super" href="#38" rel="internal"><sup>[38]</sup></a><a name="39_back_to_top"></a><a class="super" href="#39" rel="internal"><sup>[39]</sup></a><a name="40_back_to_top"></a><a class="super" href="#40" rel="internal"><sup>[40]</sup></a></p>
        <code>
/* Main Color Callouts */
h1 {
  color: red;        
}
.title-background {
  color: black;        
}  
#special-font {
  color: blue;       
}  
          
 
/* Hex Codes */
h1 {
  color: #ff0000;        
}
.title-background {
  color: #000000;        
}  
#special-font {
  color: #0000ff;       
}  
          
          
/* Abbreviated Hex Codes */
h1 {
  color: #f00;        
}
.title-background {
  color: #000;        
}  
#special-font {
  color: #00f;       
}  
          
          
/* RGB Values */
h1 {
  color: rgb(255,0,0);        
}
.title-background {
  color: rgb(0,0,0);        
}  
#special-font {
  color: rgb(0,0,255);       
}            
        </code>
        <br>
        <h2 id="fonts">Fonts</h2>
        <p>There are many desired characteristics we want to see from the fonts of a webpage, CSS makes it possible to achieve these. The family, style, size, color, and weight can all be modified for desired looks and effects. Below are many examples how to change fonts in CSS.<a name="41_back_to_top"></a><a class="super" href="#41" rel="internal"><sup>[41]</sup></a><a name="42_back_to_top"></a><a class="super" href="#42" rel="internal"><sup>[42]</sup></a><a name="43_back_to_top"></a><a class="super" href="#43" rel="internal"><sup>[43]</sup></a><a name="44_back_to_top"></a><a class="super" href="#44" rel="internal"><sup>[44]</sup></a><a name="45_back_to_top"></a><a class="super" href="#45" rel="internal"><sup>[45]</sup></a></p>
        <code>
/* Font Styles */
body {
  font-style: normal; /* The browser displays a normal font style, this is default */        
}
.font-style-1 {
  font-style: italic; /* The browser displays an italic font style */
}
#special-font {
  font-style: oblique; /* The browser displays an oblique font style */       
}  
          
          
/* Font Weights */
html {
  font-weight: normal; /* Defines normal characters, this is default */        
}          
.bold-font {
  font-weight: bold; /* Defines thick characters */        
}   
#bolder-font {
  font-weight: bolder; /* Defines thicker characters */        
}   
p {
  font-weight: lighter; /* Defines lighter characters */       
}   
.thickness-selector {
  font-weight: 100; /* 100 - 900 for custom thickness. 400 is the same as normal, 700 the same as bold */        
}          
          
          
/* Font Sizes */
h1 {
  font-size: 16px; /* Defines normal character size using pixels */        
} 
.em-size {
  font-size: 2em; /* Defines font size in ems */        
}          
          
          
/* Font Families */
h2 {
  font-family: Sans-Serif; /* Defines the Sans-Serif font family */        
}          
.font-degrade {
  font-family: Monospace, Sans-Serif; /* Defines what font to degrade to if the browser or local machine doesn't have the former in the library */   
}          

          
/* Font In One Declaration */
body {
  font: italic bold 12px arial; /* (font-style font-weight font-size font-family) All four properties can be declared on one line of code */        
}                   
        </code>
        <br>
        <h2 id="images">Images</h2>
        <p>CSS has properties called width and height that controls an elements width and height. Just like with fonts, pixels are used to control these aspects of the element. Below is an example of resizing an image.<a name="46_back_to_top"></a><a class="super" href="#46" rel="internal"><sup>[46]</sup></a></p>
        <code>
&lt;style&gt;          
  img {
    width: 500px;
    height: 500px;
    max-width: 100%;
    max-height: auto;      
}
&lt;/style&gt;          
        </code>
        <br>
        <h2 id="borders">Borders</h2>
        <p>Borders can be placed around elements to give it a more define presence or to keep objects orderly on the webpage. They come in many styles, shapes and sizes. Below are a few examples of using borders in CSS.<a name="47_back_to_top"></a><a class="super" href="#47" rel="internal"><sup>[47]</sup></a><a name="48_back_to_top"></a><a class="super" href="#48" rel="internal"><sup>[48]</sup></a><a name="49_back_to_top"></a><a class="super" href="#49" rel="internal"><sup>[49]</sup></a></p>
        <code>
&lt;style&gt;          
.border-example {
  border-color: black; /* Defines the color of the border */ 
  border-width: 7px; /* Defines the width of the border, in pixels */
  border-style: solid; /* Defines the style of the border */  
  border-radius: 10px; /* Defines how round the corners of the border are */
  border-radius: 50%; /* When used as a percentage, border-radius creates a circular border around the element */        
}
          
      
.border-example-2 {
  border: 5px dotted yellow; /* Border properties can be written on one like like shown */        
}          
&lt;/style&gt;          
        </code>
        <br>
        <h2 id="background">Background</h2>
        <p>An elements background characteristic can be set up using the background property. Much like with other elements, a backgrounds color, position, display and image overlay can be modified. Examples are shown below on CSS backgrounds.<a name="50_back_to_top"></a><a class="super" href="#50" rel="internal"><sup>[50]</sup></a><a name="51_back_to_top"></a><a class="super" href="#51" rel="internal"><sup>[51]</sup></a></p>
        <code>
&lt;style&gt;
  .background-1 {
    background-color: white; /* Specifies the background color */
    background-image: url("https://www.image-url-here.com"); /* Specifies the url for the background image overlay */
    background-repeat: no-repeat; /* Specifies how and if the background repeats */
    background-position: right top; /* Specifies the position of the background on the screen */    
}        
  .background-2 {
    background: red url("https://www.image-url-here.com") repeat-x bottom left; /* Like with many elements, all of the properties can be written on one line */     
}        
        </code>
        <br>
        <h2 id="padding">Padding</h2>
        <p>An element's padding controls the amount of space between the element's content and its border. When you increase padding, it increases the distance between the text, padding, and border around it. Sometimes you will want to customize an element so that it has different padding on each of its sides. Padding-top, padding-right, padding-bottom, and padding-left each control the padding on the different four sides of the element. The short hand of applying different padding to the sides is using clockwise notation using just the padding attribute.<a name="52_back_to_top"></a><a class="super" href="#52" rel="internal"><sup>[52]</sup></a><a name="53_back_to_top"></a><a class="super" href="#53" rel="internal"><sup>[53]</sup></a><a name="54_back_to_top"></a><a class="super" href="#54" rel="internal"><sup>[54]</sup></a></p>
        <code>
/* Normal padding */          
.box1 {
  padding: 15px;        
}          
          
          
/* Specific padding */
.box2 {
   padding-top: 15px;
   padding-right: 7px;
   padding-bottom: 3px;
   padding-left: 20px;       
}
          
          
/* Shorthand clockwise notation */
.box3 {
   padding: 15px 7px 3px 20px;       
}          
        </code>
        <br>
        <h2 id="margin">Margin</h2>
        <p>An element's margin controls the amount of space between an element's border and surrounding elements. When you increase an elements margin, it will increase the distance that distance. Just like with padding, you can control the top, right, bottom, and left margins separately. Clockwise shorthand notation can also be used with margins.<a name="55_back_to_top"></a><a class="super" href="#55" rel="internal"><sup>[55]</sup></a><a name="56_back_to_top"></a><a class="super" href="#56" rel="internal"><sup>[56]</sup></a><a name="57_back_to_top"></a><a class="super" href="#57" rel="internal"><sup>[57]</sup></a></p>
        <code>
/* Normal margin */          
.box1 {
  margin: 15px;        
}          
          
          
/* Specific margin */
.box2 {
   margin-top: 15px;
   margin-right: 7px;
   margin-bottom: 3px;
   margin-left: 20px;       
}
          
          
/* Shorthand clockwise notation */
.box3 {
   margin: 15px 7px 3px 20px;       
}          
        </code>
        <br>
      </article>
    </section>
    <!--
    <section class="main-section" id="Applied_Visual_Design">
      <header><u>Applied Visual Design</u></header>
      <article>
        <p></p>
        <p></p>
        <li></li>
        <code></code>
      </article>
    </section>
    <section class="main-section" id="Applied_Accessibility">
      <header><u>Applied Accessibility</u></header>
      <article>
        <p></p>
        <p></p>
        <li></li>
        <code></code>
      </article>
    </section>
    <section class="main-section" id="Responsive_Web_Design_Principles">
      <header><u>Responsive Web Design Principles</u></header>
      <article>
        <p></p>
        <p></p>
        <li></li>
        <code></code>
      </article>
    </section>
    <section class="main-section" id="CSS_Flexbox">
      <header><u>CSS Flexbox</u></header>
      <article>
        <p></p>
        <p></p>
        <li></li>
        <code></code>
      </article>
    </section>
    -->
    <section class="main-section" id="References"> <!-- Reference Container -->
      <header><u>References</u></header>
      <article>
        <ol>
          <li><a href="#1_back_to_top" style="text-decoration: none;">^</a> <a name="1"></a><a class="source" href="https://en.wikipedia.org/wiki/FreeCodeCamp#cite_ref-1" target="_blank">freeCodeCamp's Wikipedia article</a> - Retrieved 2017-03-16</li>
          <li><a href="#2_back_to_top" style="text-decoration: none;">^</a> <a name="2"></a><a class="source" href="https://www.freecodecamp.com/about/" target="_blank">freeCodeCamp's about page</a> - Retrieved 2017-03-16</li>
          <li><a href="#3_back_to_top" style="text-decoration: none;">^</a> <a name="3"></a><a class="source" href="https://www.smashingmagazine.com/2011/01/guidelines-for-responsive-web-design/" target="_blank">Smashing Magazine's article on Responsive Web Design</a> - Retrieved 2017-03-16</li>
          <li><a href="#4_back_to_top" style="text-decoration: none;">^</a> <a name="4"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/introduction-to-the-basic-html-and-html5-challenges" target="_blank">freeCodeCamp's overview for HTML and HTML5</a> - Retrieved 2017-03-16</li>
          <li><a href="#5_back_to_top" style="text-decoration: none;">^</a> <a name="5"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/declare-the-doctype-of-an-html-document" target="_blank">Declare the Doctype of an HTML Document</a> - Retrieved 2017-03-29</li>
          <li><a href="#6_back_to_top" style="text-decoration: none;">^</a> <a name="6"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/comment-out-html" target="_blank">HTML Comments</a> - Retrieved 2017-03-29</li>
          <li><a href="#7_back_to_top" style="text-decoration: none;">^</a> <a name="7"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/define-the-head-and-body-of-an-html-document" target="_blank">Define the Head and Body of an HTML Document</a> - Retrieved 2017-03-29</li>
          <li><a href="#8_back_to_top" style="text-decoration: none;">^</a> <a name="8"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/headline-with-the-h2-element" target="_blank">Heading Elements</a> - Retrieved 2017-03-29</li>
          <li><a href="#9_back_to_top" style="text-decoration: none;">^</a> <a name="9"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/inform-with-the-paragraph-element" target="_blank">Inform with the Paragraph Element</a> - Retrieved 2017-03-29</li>
          <li><a href="#10_back_to_top" style="text-decoration: none;">^</a> <a name="10"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/create-a-bulleted-unordered-list" target="_blank">Create a Bulleted Unordered List</a> - Retrieved 2017-03-29</li>
          <li><a href="#11_back_to_top" style="text-decoration: none;">^</a> <a name="11"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/create-an-ordered-list" target="_blank"> Create an Ordered List</a> - Retrieved 2017-03-29</li>
          <li><a href="#12_back_to_top" style="text-decoration: none;">^</a> <a name="12"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/nest-many-elements-within-a-single-div-element" target="_blank">Div Elements</a> - Retrieved 2017-03-29</li>
          <li><a href="#13_back_to_top" style="text-decoration: none;">^</a> <a name="13"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/add-images-to-your-website" target="_blank">Add Images to Your Website</a> - Retrieved 2017-03-29</li>
          <li><a href="#14_back_to_top" style="text-decoration: none;">^</a> <a name="14"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/link-to-external-pages-with-anchor-elements" target="_blank">Link to External Pages with Anchor Elements</a> - Retrieved 2017-03-29</li>
          <li><a href="#15_back_to_top" style="text-decoration: none;">^</a> <a name="15"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/link-to-internal-sections-of-a-page-with-anchor-elements" target="_blank">Link to Internal Sections of a Page with Anchor Elements</a> - Retrieved 2017-03-29</li>
          <li><a href="#16_back_to_top" style="text-decoration: none;">^</a> <a name="16"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/make-dead-links-using-the-hash-symbol" target="_blank">Make Dead Links Using the Hash Symbol</a> - Retrieved 2017-03-29</li>
          <li><a href="#17_back_to_top" style="text-decoration: none;">^</a> <a name="17"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/turn-an-image-into-a-link" target="_blank">Turn an Image into a Link</a> - Retrieved 2017-03-29</li>
          <li><a href="#18_back_to_top" style="text-decoration: none;">^</a> <a name="18"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/create-a-form-element" target="_blank">Create a Form Element</a> - Retrieved 2017-03-31</li>
          <li><a href="#19_back_to_top" style="text-decoration: none;">^</a> <a name="19"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/create-a-text-field" target="_blank">Create a Text Field</a> - Retrieved 2017-03-31</li>
          <li><a href="#20_back_to_top" style="text-decoration: none;">^</a> <a name="20"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/add-placeholder-text-to-a-text-field" target="_blank">Add Placeholder Text to a Text Field</a> - Retrieved 2017-03-31</li>
          <li><a href="#21_back_to_top" style="text-decoration: none;">^</a> <a name="21"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/add-a-submit-button-to-a-form" target="_blank">Add a Submit Button to a Form</a> - Retrieved 2017-03-31</li>
          <li><a href="#22_back_to_top" style="text-decoration: none;">^</a> <a name="22"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/use-html5-to-require-a-field" target="_blank">Use HTML5 to Require a Field</a> - Retrieved 2017-03-31</li>
          <li><a href="#23_back_to_top" style="text-decoration: none;">^</a> <a name="23"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/create-a-set-of-radio-buttons" target="_blank">Create a Set of Radio Buttons</a> - Retrieved 2017-03-31</li>
          <li><a href="#24_back_to_top" style="text-decoration: none;">^</a> <a name="24"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/create-a-set-of-checkboxes" target="_blank">Create a Set of Checkboxes</a> - Retrieved 2017-03-31</li>
          <li><a href="#25_back_to_top" style="text-decoration: none;">^</a> <a name="25"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-html-and-html5/check-radio-buttons-and-checkboxes-by-default" target="_blank">Check Radio Buttons and Checkboxes by Default</a> - Retrieved 2017-03-31</li>
          <li><a href="#26_back_to_top" style="text-decoration: none;">^</a> <a name="26"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/introduction-to-basic-css" target="_blank">freeCodeCamp's overview for CSS and CSS3</a> - Retrieved 2017-03-31</li>
          <li><a href="#27_back_to_top" style="text-decoration: none;">^</a> <a name="27"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-css-selectors-to-style-elements" target="_blank">Use CSS Selectors to Style Elements</a> - Retrieved 2017-04-05</li>
          <li><a href="#28_back_to_top" style="text-decoration: none;">^</a> <a name="28"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-a-css-class-to-style-an-element" target="_blank">Use a CSS Class to Style an Element</a> - Retrieved 2017-04-05</li>
          <li><a href="#29_back_to_top" style="text-decoration: none;">^</a> <a name="29"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/style-multiple-elements-with-a-css-class" target="_blank">Style Multiple Elements with a CSS Class</a> - Retrieved 2017-04-05</li>
          <li><a href="#30_back_to_top" style="text-decoration: none;">^</a> <a name="30"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/set-the-id-of-an-element" target="_blank">Set the id of an Element</a> - Retrieved 2017-04-05</li>
          <li><a href="#31_back_to_top" style="text-decoration: none;">^</a> <a name="31"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-an-id-attribute-to-style-an-element" target="_blank">Use an id Attribute to Style an Element
</a> - Retrieved 2017-04-05</li>
          <li><a href="#32_back_to_top" style="text-decoration: none;">^</a> <a name="32"></a><a class="source" href="https://developer.mozilla.org/en/docs/Web/CSS/@import" target="_blank">@import - CSS</a> - Retrieved 2017-04-05</li>
          <li><a href="#33_back_to_top" style="text-decoration: none;">^</a> <a name="33"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/understand-absolute-versus-relative-units" target="_blank">Understand Absolute versus Relative Units</a> - Retrieved 2017-04-05</li>
          <li><a href="#34_back_to_top" style="text-decoration: none;">^</a> <a name="34"></a><a class="source" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Comments" target="_blank">MDN - CSS - Comments</a> - Retrieved 2017-04-06</li>
          <li><a href="#35_back_to_top" style="text-decoration: none;">^</a> <a name="35"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/change-the-color-of-text" target="_blank">Change the Color of Text</a> - Retrieved 2017-04-06</li>
          <li><a href="#36_back_to_top" style="text-decoration: none;">^</a> <a name="36"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-hex-code-for-specific-colors" target="_blank">Use Hex Code for Specific Colors</a> - Retrieved 2017-04-06</li>
          <li><a href="#37_back_to_top" style="text-decoration: none;">^</a> <a name="37"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-abbreviated-hex-code" target="_blank">Use Abbreviated Hex Code</a> - Retrieved 2017-04-06</li>
          <li><a href="#38_back_to_top" style="text-decoration: none;">^</a> <a name="38"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-rgb-values-to-color-elements" target="_blank">Use RGB values to Color Elements</a> - Retrieved 2017-04-06</li>
          <li><a href="#39_back_to_top" style="text-decoration: none;">^</a> <a name="39"></a><a class="source" href="https://en.wikipedia.org/wiki/Hexadecimal" target="_blank">Wikipedia - Hexadecimal</a> - Retrieved 2017-04-06</li>
          <li><a href="#40_back_to_top" style="text-decoration: none;">^</a> <a name="40"></a><a class="source" href="http://www.colorhexa.com" target="_blank">ColorHexa</a> - Retrieved 2017-04-06</li>
          <li><a href="#41_back_to_top" style="text-decoration: none;">^</a> <a name="41"></a><a class="source" href="https://www.w3schools.com/cssref/pr_font_font-style.asp" target="_blank">CSS font-style Property</a> - Retrieved 2017-04-07</li>
          <li><a href="#42_back_to_top" style="text-decoration: none;">^</a> <a name="42"></a><a class="source" href="https://www.w3schools.com/cssref/pr_font_weight.asp" target="_blank">CSS font-weight Property</a> - Retrieved 2017-04-07</li>
          <li><a href="#43_back_to_top" style="text-decoration: none;">^</a> <a name="43"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/set-the-font-family-of-an-element" target="_blank">Set the Font Family of an Element</a> - Retrieved 2017-04-07</li>
          <li><a href="#44_back_to_top" style="text-decoration: none;">^</a> <a name="44"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/specify-how-fonts-should-degrade" target="_blank">Specify How Fonts Should Degrade</a> - Retrieved 2017-04-07</li>
          <li><a href="#45_back_to_top" style="text-decoration: none;">^</a> <a name="45"></a><a class="source" href="https://www.w3schools.com/cssref/pr_font_font.asp" target="_blank">CSS font Property</a> - Retrieved 2017-04-07</li>
          <li><a href="#46_back_to_top" style="text-decoration: none;">^</a> <a name="46"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/size-your-images" target="_blank">Size Your Images</a> - Retrieved 2017-04-07</li>
          <li><a href="#47_back_to_top" style="text-decoration: none;">^</a> <a name="47"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/add-borders-around-your-elements" target="_blank">Add Borders Around Your Elements</a> - Retrieved 2017-04-07</li>
          <li><a href="#48_back_to_top" style="text-decoration: none;">^</a> <a name="48"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/add-rounded-corners-with-borderradius" target="_blank">Add Rounded Corners with border-radius</a> - Retrieved 2017-04-07</li>
          <li><a href="#49_back_to_top" style="text-decoration: none;">^</a> <a name="49"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/make-circular-images-with-a-borderradius" target="_blank">Make Circular Images with a border-radius</a> - Retrieved 2017-04-07</li>
          <li><a href="#50_back_to_top" style="text-decoration: none;">^</a> <a name="50"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/give-a-background-color-to-a-div-element" target="_blank">Give a Background Color to a div Element</a> - Retrieved 2017-04-07</li>
          <li><a href="#51_back_to_top" style="text-decoration: none;">^</a> <a name="51"></a><a class="source" href="https://www.w3schools.com/css/css_background.asp" target="_blank">CSS Backgrounds</a> - Retrieved 2017-04-07</li>
          <li><a href="#52_back_to_top" style="text-decoration: none;">^</a> <a name="52"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/adjust-the-padding-of-an-element" target="_blank">Adjust the Padding of an Element</a> - Retrieved 2017-04-21</li>
          <li><a href="#53_back_to_top" style="text-decoration: none;">^</a> <a name="53"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/add-different-padding-to-each-side-of-an-element" target="_blank">Add Different Padding to Each Side of an Element
</a> - Retrieved 2017-04-21</li>
          <li><a href="#54_back_to_top" style="text-decoration: none;">^</a> <a name="54"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-clockwise-notation-to-specify-the-padding-of-an-element" target="_blank">Use Clockwise Notation to Specify the Padding of an Element</a> - Retrieved 2017-04-21</li>
          <li><a href="#55_back_to_top" style="text-decoration: none;">^</a> <a name="55"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/adjust-the-margin-of-an-element" target="_blank">Adjust the Margin of an Element</a> - Retrieved 2017-04-21</li>
          <li><a href="#56_back_to_top" style="text-decoration: none;">^</a> <a name="56"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/add-different-margins-to-each-side-of-an-element" target="_blank">Add Different Margins to Each Side of an Element</a> - Retrieved 2017-04-21</li>
          <li><a href="#57_back_to_top" style="text-decoration: none;">^</a> <a name="57"></a><a class="source" href="https://beta.freecodecamp.com/en/challenges/basic-css/use-clockwise-notation-to-specify-the-margin-of-an-element" target="_blank">Use Clockwise Notation to Specify the Margin of an Element</a> - Retrieved 2017-04-21</li>
          <!--
          <li><a href="#49_back_to_top" style="text-decoration: none;">^</a> <a name="49"></a><a class="source" href="#" target="_blank">#</a> - Retrieved 2017-04-07</li>
          -->
        </ol>
      </article>
    </section>
  </main>
</body>
<style type="text/css">
  .nav{
    margin: 0;
    padding: 0;
    font-size: 16px;
    font-weight: bold;
    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
    overflow: hidden;
    background-color: black;
}
.nav li{
    display:inline;
    background-color: black;
}
.nav a {
    color:white;
    display:inline-block;
    padding:20px;
    text-decoration: none;
    background-color: black;
}
.nav a:hover{
  background-color: #593a3a;
}
li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}


.dropdown:hover .dropdown-content {
  display: block;
}

  @import url('https://fonts.googleapis.com/css?family=Lato');

html, body {
  font-family: 'Lato', Arial, sans-serif;
  background-color: rgb(0,100,0);
  color: white;
  line-height: 1.3;
}
#navbar {
padding-left:px;
  margin-left:10px;
  position: fixed;
  top: 0px;
  left: 0px;
  width: 323px;
  height: 100%;
  border: 1px solid white;
  overflow-y: scroll;
}
header {
  font-size: 31px;
  margin: 7px;
  text-align: center;
}
.nav-link {
  padding: 3px;
  text-decoration: none;
  cursor: pointer;
}
#navbar li {
  color: white;
  border: 1px solid;
  padding: 7px;
  list-style: none;
  position: relative;
  right: 17px;
}
#main-doc {
  position: absolute;
  margin-left: 311px;
  margin-bottom: 109px;
  padding: 23px;
}
#main-doc header {
  text-align: left;
  margin: auto;
  margin-top: 37px;
}
#main-doc a {
  font-weight: bold;
  color: rgb(153,153,144);
}
.main-section {
  margin: 17px;
}
p {
  margin-left: 23px;
  width: 80%;
  max-width: 100%;
}
h1 {
  font-size: 2em;
}
#heading_code {
  line-height: .8;
}
section li {
  margin: 17px 0px 0px 23px;
}
img {
  margin-top: 13px;
  margin-left: 23px;
  max-width: 100%;
  height: auto;
}
.caption {
  font-size: 13px;
  margin-left: 23px;
  margin-bottom: 31px;
}
code {
  display: block;
  background-color: #eeeeee;
  color: black;
  text-align: left;
  white-space: pre-wrap;
  position: relative;
  word-break: normal;
  width: 79%;
  max-width: 100%;
  line-height: 2;
  padding: 13px;
  margin: 11px;
  margin-left: 23px;
  border-radius: 7px;
}
footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: right;
  padding: 3px;
}
@media only screen and (max-width: 736px) {
  #navbar ul {
    height: 207px;
  }
  #navbar {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    padding: 0;
    margin: 0;
    width: 100%;
    max-height: 275px;
    border: none;
    z-index: 1;
    border-bottom: 3px solid white;
  }
  #main-doc {
    position: relative;
    margin-left: 0px;
    margin-top: 270px;
  }
  footer {
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 3px;
  }
}
@media only screen 
  and (max-device-width: 400px) {
  #main-doc {
    margin-left: -10px;
  }
  code {
    font-size: .75em;
    margin-left: -20px;
    max-width: 100%;
    padding: 15px 45px 15px 10px;
    min-width: 233px;
  }
  footer {
    padding: 3px;
  }
}
</style>
<footer>&copy; IronWareEngine Documentation</footer>