<style>
    ::selection {
  background: #e2ee06;

}


mark{
    background-color:  rgba(255, 255, 0, 0.389);
    color: black;
}
    main{
       display: flex;
       flex-direction: column;
       
       /*border: 2px solid black;*/
       
       animation: text 3s alternate ;
       gap: 1rem;
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
        -webkit-text-stroke: 1px black;;
        text-stroke: 1px black;
        -webkit-text-fill-color: white;
        text-fill-color: transparent;
        color: transparent;
        transition: all .5s ease;
        -webkit-font-smoothing: antialiased;
    }

    .marquee_group > span{
        transition: text-shadow .5s ease-in-out;
    }
    .marquee_group{
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5rem;
        min-width: 100%;
        animation: scroll 30s linear infinite;
        font-size: clamp(25px, 4vw, 52px);;
        
    }
    .marquee_group :nth-child(2n){
        color:#e2ee06;
    }
    .marquee_group :nth-child(2n-1){
        color: black;
    }
    .marquee_group :nth-last-child(1){
        color: #2e9942;
    }
    .marquee_group > span:hover{
        text-shadow: 4px 4px #e2ee06;
        
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
  background-color: black;
  transform: scaleX(0);
  transform-origin: top left;
  transition: transform 0.3s ease;
}
.contact-link{
    color:  rgba(255, 255, 0, 0.389);
}

#contact a:hover::before {
  transform: scaleX(1);
}
.flex{
    display: flex;
}
#produce{
   font-size: clamp(18px, 3vw, 32px);
   font-style: italic;
   text-transform: lowercase;
   
        -webkit-text-stroke: 1px black;
        text-stroke: 1px black;
}
#produce mark{
    color: transparent;
}
#agency{
   font-size: clamp(18px, 3vw, 32px);
}
#hero-m{
    padding: 1rem 3rem;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}
@media(max-width: 500px){
    #hero-m{
            padding: 0 1rem;
            gap: .5rem;
        }
    #agency, #produce{
        font-size: 1.5rem;
    }
    .marquee_group{
        height: 100%;
        line-height: 2;
    }
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
    <div id="hero-m">
        <div style="">
            <h1 id="agency" style="font-weight: 400;">New Webdev Agency in Vienna</h1>
        </div>
        <div style="">
            <h1 id="produce" style="font-weight: 400;"><mark>We produce:</mark></h1>
        </div>
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