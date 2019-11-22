<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <!--<link href="dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body onload="RetrieveLocalStorage()">

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Setting image whith Local Storage</h1>
         
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <span id="s1"></span>
              <div class="card mb-4 box-shadow">
                <img id = "i1" class="card-img-top" src="{{ asset('pic/IMAGE_HOLDER.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick = renderItem('i1','s1')>Search</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick = saveInLocalStorage('i1','s1')>Save</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <span id="s2"></span>
              <div class="card mb-4 box-shadow">
                <img id = "i2" class="card-img-top" data-src="{{ asset('pic/IMAGE_HOLDER.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick = renderItem('i2','s2')>Search</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick = saveInLocalStorage('i2','s2')>Save</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <span id="s3"></span>
              <div class="card mb-4 box-shadow">
                <img id = "i3" class="card-img-top" data-src="{{ asset('pic/IMAGE_HOLDER.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick = renderItem('i3','s3')>Search</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick = saveInLocalStorage('i3','s3')>Save</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            
            </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="">Visit the homepage</a> or read our <a href="getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="dist/js/bootstrap.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!--<script src="assets/js/vendor/popper.min.js"></script>-->
    
    <script src="{{ asset('js/holder.min.js') }}"></script>
    <script>
    const numItemsToGenerate = 1; 

      function renderItem(im_id,sp_id){
        console.log(im_id);
        var tem,item, ww;
        fetch('https://source.unsplash.com/410x250/?mountains').then((response)=> { 
            console.log(response);  
            tem = document.getElementById(im_id);
            tem.setAttribute("src", response.url);
                    
        }) 
        .catch(rejected => {
        console.log(rejected);
        document.getElementById(sp_id).innerHTML = "<p>network error</p>";
        })
      }

     function saveInLocalStorage(im_id, sp_id){

      var q = document.getElementById( im_id ).src;
      myObj = {id: im_id, src: q};
      myJSON = JSON.stringify(myObj);
      localStorage.setItem(im_id, myJSON);
      document.getElementById(sp_id).innerHTML = "saved";

      // Retrieving data:
      /*text = localStorage.getItem(im_id);
      obj = JSON.parse(text);
      document.getElementById(sp_id).innerHTML = obj.src;*/
    
    }
    
    function RetrieveLocalStorage(){

      var img = document.getElementsByTagName("img");
      var curId,text,obj,imgT; 
      for (var i=0, max=img.length; i < max; i++) {
           console.log(img[i]['id']);
           curId = img[i]['id'];
           if(!!curId){
             text = localStorage.getItem(curId);
             obj = JSON.parse(text);
             imgT = document.getElementById(curId);
             imgT.setAttribute("src", obj.src);
            }
      }
    }

  </script>
  </body>
</html>