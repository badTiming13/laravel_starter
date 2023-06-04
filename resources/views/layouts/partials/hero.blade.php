<style>
    ::selection {
  background: #e2ee06;

}


mark{
    background-color: #e2ee06;
    color: #4b4b4b;
}
    main{
       display: flex;
       flex-direction: column;
       
       /*border: 2px solid black;*/
       color: #4b4b4b;
       animation: text 3s alternate ;
       padding-bottom: 2rem;
       opacity: 1;
    }
    
    .marquee{
        display: flex;
        overflow: hidden;
        gap: 5rem;
        user-select: none;
        padding-top: 1rem;
    }
    .marquee{
        -webkit-text-stroke: 1.5px #4b4b4b;;
        text-stroke: 1.5px #4b4b4b;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
        color: transparent;
        transition: all .5s ease;
        -webkit-font-smoothing: antialiased;
    }
    .marquee_group{
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5rem;
        min-width: 100%;
        animation: scroll 30s linear infinite;
        font-size: 3rem;
    }
    .marquee_group :nth-child(2n){
        color:#e2ee06;
    }
    .marquee_group :nth-child(2n-1){
        color: #4b4b4b;
    }
    .marquee_group :nth-last-child(1){
        color: #2e9942;
    }
    .hero-block h1{
        font-size: 1.8rem;
        font-weight: 700;
    }
    .hero-block{
        padding: 3rem;
        /*border: 3px dashed black;*/
        width: fit-content;
    }
    #contact{
        display: flex;
    }
    #contact a {
  position: relative;
  
}
#contact h1{
    padding: 0;
  margin: 0;
}


#contact a::before {

  content: "";
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #4b4b4b;
  transform: scaleX(0);
  transform-origin: top left;
  transition: transform 0.3s ease;
}
.contact-link{
    color: #e2ee06;
}

#contact a:hover::before {
  transform: scaleX(1);
}
.flex{
    display: flex;
}


    @keyframes scroll{
        from{
            transform: translateX(0);
        }
        to{
            transform: translateX(calc(-100% - 5rem));
        }
    }
    @keyframes text {
        0%, 25%{
            clip-path: polygon(0 100%, 100% 100%, 100% 100%, 0 100%);
            opacity: 0;
        }
        50%{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
           
        }
    }
   
</style>
<main>
    <div style="padding-inline:2rem;">
        <h1>New Webdev Agency in Vienna</h1>
    </div>
    <div style="padding-inline:2rem;">
        <h1 style="font-size: 3rem;"><mark>We produce:</mark></h1>
    </div>

    <div class="marquee">
        <div class="marquee_group" >
            <span>#Webdevelopment</span>
            <span>#UI/UX Design</span>
            <span>#Branding</span>
            <span>#Consulting</span>
            <span>#Digital support</span>  
        </div>
        <div class="marquee_group" aria-hidden="true">
            <span style="">#Webdevelopment</span>
            <span>#UI/UX Design</span>
            <span>#Branding</span>
            <span>#Consulting</span>
            <span>#Digital support</span>  
        </div>
    </div>
    
  

</main>