<style>
  
    #logo{
        font-size: 3rem;
    }
    .logo{
        position: relative;
    }
    .logo h1{
        animation: text 3s alternate ;
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
        position: relative;
       

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

    a {
  position: relative;
  color: #4b4b4b;
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
    .nav-links{
        display: none;
    }
}
/*HAM*/


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
       

      
          
  

    </nav>
</header>