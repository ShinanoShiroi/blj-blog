
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
  <style>
   ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
  }
  
  li {
    float: left;
    border-right:1px solid #bbb;
  }
  
  li:last-child {
    border-right: none;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  </style>
 </head>
 <body>
  <nav>
    <ul>
      <li><a href="/blog/">Home</a></li>
      <li><a href="/blog/blogs.php">Blog</a></li>
    </ul> 
  </nav>
 </body>
</html>
