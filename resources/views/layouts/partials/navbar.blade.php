<style>
  
    #logo{
        
    }
    .logo{
        position: relative;
    }
    .logo h1{
        font-size: clamp(25px, 4vw, 48px);
        animation: text 3s alternate;
    }
    .logo:before{
      
        animation: all 3s alternate ;
    }
   

    @keyframes text {
        0%, 25%{
            clip-path: polygon(0 100%, 100% 100%, 100% 100%, 0 100%);
        }
        50%{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
    }
    header{
        font-family: "june-expt-variable", sans-serif;
        font-variation-settings: "STYL" 0;
        color: #4b4b4b;
    }
    header nav a{
       text-decoration: none;
       
    }
    nav{
        display: flex;
        justify-content: space-between;
        padding: 1rem 3rem;
        align-items: center;
       
       

    }
    /*NAV LINKS*/
    .nav-links{
        display: flex;
        list-style: none;
        justify-content: space-around;
        gap: 2.5rem;
        padding: 0;
        font-weight: 700;
        font-size: larger;
    }
    

    @media (max-width: 1350px) {
        .nav-links{
            display: none;
        }
       
       
    }
    @media(max-width: 500px){
        nav{
            padding: 0;
        }
    }

    a {
  position: relative;
  color: black;
  text-decoration: none;
  
}

a:hover {
  color: #000;
}

.link-menu::before {

  content: "";
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  bottom: -20%;
  left: 0;
  background-color: #e2ee06;
  transform: scaleX(0);
  transform-origin: top left;
  transition: transform 0.3s ease;
}

.link-menu:hover::before {
  transform: scaleX(1);
}
@media(max-width: 950px){
   
   
}
/*HAM*/
/* The Overlay (background) */
.overlay {
  /* Height & width depends on how you want to reveal the overlay (see JS below) */   
  height: 0;
  width: 100%;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  background-color: black; /* Black fallback color */
  overflow-x: hidden; /* Disable horizontal scroll */
  overflow-y: hidden;
  transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}

/* The navigation links inside the overlay */
.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block; /* Display block instead of inline */
  transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
    
    color: #e2ee06;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 25px;
  font-size: 3rem;
  -webkit-text-fill-color: transparent; /* Will override color (regardless of order) */
  -webkit-text-stroke-width: 1px;
}
#menu-toggle{
    display: none;
    cursor: pointer;
    font-size: clamp(16px, 4vw, 30px);
    
}


#parentDiv {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  text-transform: lowercase;
  font-style: italic;
  max-height: 100vh;
}
#parentDiv a {

  opacity: 0;
  transform: translateX(-50px);
  color: white;
  transition: opacity 0.5s ease, transform 0.5s ease;
}
.nav-linkss{
    -webkit-text-fill-color: transparent; /* Will override color (regardless of order) */
  -webkit-text-stroke-width: 1px;
}
#parentDiv a:hover, #parentDiv a:focus{
    color: #e2ee06;
}



#parentDiv a.animate-link {
  opacity: 1;
  transform: translateX(0);
}
#hi{
    padding-top: 10%;
}
#mail{
    font-size: 1rem;
}
.social-icons{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}
.closebtn{
    z-index: 10;
}

@media(max-height: 800px){
    #hi{
        padding: 0;
    }
}
@media(max-height: 500px){
    #hi{
        padding: 0;
    }
    #parentDiv{
        flex-direction: row;
        justify-content: space-around;
    }
}


@media (max-width: 1350px){
        #menu-toggle{
           display:block;
        }
    }

</style>


<header>
   
    <nav id="nav">

        <div id="logo" class="logo">
            <a href="/"><h1>automate me.</h1></a>
        </div>

        
            <ul class="nav-links">
                <li>
                    <a class="link-menu" href="#">services</a>
                </li>
                <li>
                    <a class="link-menu" href="#">projects</a>
                </li>
                <li>
                    <a class="link-menu" href="#">contact</a>
                </li>
                <li>
                    <a class="link-menu" href="#">blog</a>
                </li>
                <li>
                    <a class="link-menu" href="#">about</a>
                </li>
                <li>
                    <a href="#">de</a>
                </li>
                <li>
                    <a href="#">en</a>
                </li>
            </ul>
       
            <div id="menu-toggle">
                <span style="color: black;"  onclick="openNav()">menu</span>
            </div>

        <div id="myNav" class="overlay">

            <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          
            <!-- Overlay content -->
            <div id="parentDiv" class="overlay-content">
             <div>
              <a class="nav-linkss" href="#">Services</a>
              <a class="nav-linkss" href="#">Projects</a>
              <a class="nav-linkss" href="#">Contact</a>
              <a class="nav-linkss" href="#">Blog</a>
              <a class="nav-linkss" href="#">About</a>
             </div>   
              

               <div id="menu-footer">
                    <div id="hi">
                        <p style="color: #4b4b4b;">say hi!</p>
                        <a href="mailto:office@automate-me.at" id="mail">office@automate-me.at</a></p>
                    </div>
                    <div class="social-icons">
                        <div><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></div>
                        <div><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></div>
                    </div>
               </div>

            </div>
          
          </div>
          
  

    </nav>
</header>

<script>
const parentDiv = document.getElementById('parentDiv');
const links = parentDiv.getElementsByTagName('a');

const delay = 200;
/* Open */
function openNav() {
  document.getElementById("myNav").style.height = "100%";
  Array.from(links).forEach((link, index) => {
  setTimeout(() => {
    link.classList.add('animate-link');
  }, index * delay);
});
}

/* Close */
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  Array.from(links).forEach((link, index) => {
  setTimeout(() => {
    link.classList.remove('animate-link');
  }, index);
});

}


</script>