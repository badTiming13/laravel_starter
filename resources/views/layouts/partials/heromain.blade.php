<style>
    #heromain{
        padding:2rem 3rem;
        font-weight: 400;
       
        
    }
    #heromain h1{
       
        font-weight: 400;
    }
    .service-blocks{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        padding-block: 2rem;
        gap: 10px;
    }
    .service-blocks > div{
       
  transition: all .5s ease;
        padding: 2rem;
       
    }
    .service-blocks > div:hover, .service-blocks > div:focus, .service-blocks > div:active{
        background:  rgba(255, 255, 0, 0.389);
        /*border: transparent;*/
    }
    /*Finally primary glow effect
    .s-block{
        position: relative;
    }
    
    .s-block:after{
       background: radial-gradient(rgba(1, 65, 255, 0.4), rgba(1, 65, 255, 0));
       width: 240px;
       height: 180px;
       z-index: -1;
       content: '';
        left: 50%;
        position: absolute;
        filter: blur(45px);
       
    }
    */
    .s-block h1{
        font-size: 1.5rem; 
    }
    .s-block p{
        font-size: 1rem;
        display: none;
    }
    .hero-svg{
        width: 3rem;
        fill: black;
    }
    .m-info{
        display: flex;
        align-items: center;
        gap:  1rem;
    }
    .m-info svg{
        opacity: 0;
        transform: translateX(-80%);
        width: 1.5rem;
        transition: all .5s ease;
    }
    .s-block{
        border-radius: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .s-block:hover svg{
        opacity: 1;
        transform: translateX(0);
    }
  
    #h-serv{
        position: relative;
        font-size: clamp(18px, 3vw, 32px);
        color: transparent;
        -webkit-text-stroke: 1px black;
        text-stroke: 1px black;
        width: fit-content;
        transition: all 1s ease;
    }
    #h-serv:before{
        position: absolute;
        content: '';
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background: rgba(255, 255, 0, 0.389);
        top: -15px;
        left: -20px;
        z-index: -1;
        
    }
    #h-serv:hover {
    color: black;
    -webkit-text-stroke: unset;
    text-stroke: unset;
}


    @media (max-width: 1200px){
        .service-blocks{
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 880px){
        .service-blocks{
            grid-template-columns: 1fr;
        }
    }
    @media(max-width: 500px){
        #h-serv{
            font-size: 1.5rem;
        }
        #heromain{
            padding: 1rem 1rem;
        }
    }
</style>

<div id="heromain">
    <h1 id="h-serv" style="font-weight: 400;">Services</h1>

    <div class="service-blocks">
        
        <div id="test" class="s-block">
            <div><svg class="hero-svg" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="layer1"> <path d="M 0 2 L 0 18 L 20 18 L 20 2 L 0 2 z M 1 3 L 19 3 L 19 5 L 1 5 L 1 3 z M 1 6 L 19 6 L 19 17 L 1 17 L 1 6 z M 7.6464844 8.1464844 L 4.2929688 11.5 L 7.6464844 14.853516 L 8.3535156 14.146484 L 5.7070312 11.5 L 8.3535156 8.8535156 L 7.6464844 8.1464844 z M 12.353516 8.1464844 L 11.646484 8.8535156 L 14.292969 11.5 L 11.646484 14.146484 L 12.353516 14.853516 L 15.707031 11.5 L 12.353516 8.1464844 z " style="fill:#222222; fill-opacity:1; stroke:none; stroke-width:0px;"></path> </g> </g></svg></div>
            <h1 style="">Webdevelopment</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quasi distinctio repellat quo beatae numquam corrupti cupiditate dolore enim, dicta neque modi provident totam velit!</p>
            <div class="m-info">
                <a href="">More info</a>
                <div><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="arrow-right"> <g> <polyline data-name="Right" fill="none" id="Right-2" points="16.4 7 21.5 12 16.4 17" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="2.5" x2="19.2" y1="12" y2="12"></line> </g> </g> </g> </g></svg></div>
            </div>
        </div>
        <div id="test1" class="s-block">
            <div><svg class="hero-svg" fill="#000000"   version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511 511" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M39.5,103c1.97,0,3.91-0.8,5.3-2.2c1.4-1.39,2.2-3.33,2.2-5.3s-0.8-3.91-2.2-5.3c-1.39-1.4-3.32-2.2-5.3-2.2 s-3.91,0.8-5.3,2.2c-1.4,1.39-2.2,3.33-2.2,5.3s0.8,3.91,2.2,5.3C35.59,102.2,37.53,103,39.5,103z"></path> <path d="M63.5,103c1.98,0,3.91-0.8,5.3-2.2c1.4-1.39,2.2-3.33,2.2-5.3s-0.8-3.91-2.2-5.3c-1.39-1.4-3.33-2.2-5.3-2.2 c-1.97,0-3.91,0.8-5.3,2.2c-1.4,1.39-2.2,3.33-2.2,5.3s0.8,3.91,2.2,5.3C59.59,102.2,61.53,103,63.5,103z"></path> <path d="M87.5,103c1.97,0,3.91-0.8,5.3-2.2c1.4-1.39,2.2-3.33,2.2-5.3s-0.8-3.91-2.2-5.3c-1.39-1.4-3.33-2.2-5.3-2.2 c-1.97,0-3.91,0.8-5.3,2.2c-1.4,1.39-2.2,3.33-2.2,5.3s0.8,3.91,2.2,5.3C83.59,102.2,85.53,103,87.5,103z"></path> <path d="M119.5,103h304c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-304c-4.142,0-7.5,3.358-7.5,7.5S115.358,103,119.5,103z"></path> <path d="M455.5,103h16c4.142,0,7.5-3.358,7.5-7.5s-3.358-7.5-7.5-7.5h-16c-4.142,0-7.5,3.358-7.5,7.5S451.358,103,455.5,103z"></path> <path d="M439.5,168h-144c-12.958,0-23.5,10.542-23.5,23.5v0.5h-8.5c-12.958,0-23.5,10.542-23.5,23.5V280h-17v-24.5 c0-12.958-10.542-23.5-23.5-23.5h-128C58.542,232,48,242.542,48,255.5v64c0,12.958,10.542,23.5,23.5,23.5h128 c12.958,0,23.5-10.542,23.5-23.5V295h17v64.5c0,12.958,10.542,23.5,23.5,23.5h8.5v0.5c0,12.958,10.542,23.5,23.5,23.5h144 c12.958,0,23.5-10.542,23.5-23.5v-16c0-12.958-10.542-23.5-23.5-23.5h-144c-12.958,0-23.5,10.542-23.5,23.5v0.5h-8.5 c-4.687,0-8.5-3.813-8.5-8.5V295h17v0.5c0,12.958,10.542,23.5,23.5,23.5h144c12.958,0,23.5-10.542,23.5-23.5v-16 c0-12.958-10.542-23.5-23.5-23.5h-144c-12.958,0-23.5,10.542-23.5,23.5v0.5h-17v-64.5c0-4.687,3.813-8.5,8.5-8.5h8.5v0.5 c0,12.958,10.542,23.5,23.5,23.5h144c12.958,0,23.5-10.542,23.5-23.5v-16C463,178.542,452.458,168,439.5,168z M208,319.5 c0,4.687-3.813,8.5-8.5,8.5h-128c-4.687,0-8.5-3.813-8.5-8.5v-64c0-4.687,3.813-8.5,8.5-8.5h128c4.687,0,8.5,3.813,8.5,8.5V319.5z M287,367.5c0-4.687,3.813-8.5,8.5-8.5h144c4.687,0,8.5,3.813,8.5,8.5v16c0,4.687-3.813,8.5-8.5,8.5h-144 c-4.687,0-8.5-3.813-8.5-8.5V367.5z M287,279.5c0-4.687,3.813-8.5,8.5-8.5h144c4.687,0,8.5,3.813,8.5,8.5v16 c0,4.687-3.813,8.5-8.5,8.5h-144c-4.687,0-8.5-3.813-8.5-8.5V279.5z M448,207.5c0,4.687-3.813,8.5-8.5,8.5h-144 c-4.687,0-8.5-3.813-8.5-8.5v-16c0-4.687,3.813-8.5,8.5-8.5h144c4.687,0,8.5,3.813,8.5,8.5V207.5z"></path> <path d="M471.5,56h-432C17.72,56,0,73.72,0,95.5v320C0,437.28,17.72,455,39.5,455h432c21.78,0,39.5-17.72,39.5-39.5v-320 C511,73.72,493.28,56,471.5,56z M39.5,71h432c13.509,0,24.5,10.991,24.5,24.5V120H15V95.5C15,81.991,25.991,71,39.5,71z M471.5,440 h-432C25.991,440,15,429.009,15,415.5V135h481v280.5C496,429.009,485.009,440,471.5,440z"></path> </g> </g></svg></div>
            <h1>UI/UX Design</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quasi distinctio repellat quo beatae numquam corrupti cupiditate dolore enim, dicta neque modi provident totam velit!</p>
            <div class="m-info">
                <a href="">More info</a>
                <div><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="arrow-right"> <g> <polyline data-name="Right" fill="none" id="Right-2" points="16.4 7 21.5 12 16.4 17" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="2.5" x2="19.2" y1="12" y2="12"></line> </g> </g> </g> </g></svg></div>
            </div>
        </div>
        <div class="s-block">
            <div><svg class="hero-svg" fill="#000000"  version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-2.4 -2.4 28.80 28.80" enable-background="new 0 0 24 24" xml:space="preserve" stroke="#000000" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M23.4,13.3C23,13.1,22.4,13,22,13.2l-1,0.4v-12C21,0.7,20.3,0,19.5,0h-2C16.7,0,16,0.7,16,1.5V3h-2.5C12.7,3,12,3.7,12,4.5 V8H9.5C8.7,8,8,8.7,8,9.5v5.2l-3,0.7v-0.3c0-0.6-0.3-1.1-0.8-1.3L3,13.2C2.8,12.5,2.2,12,1.5,12h-1C0.2,12,0,12.2,0,12.5v11 C0,23.8,0.2,24,0.5,24h1c0.7,0,1.3-0.5,1.5-1.2l1.2-0.6C4.6,22,4.9,21.5,5,21l4.8,2.8c0.2,0.1,0.5,0.2,0.8,0.2 c0.2,0,0.5-0.1,0.7-0.2l12-6.4c0.5-0.3,0.8-0.8,0.8-1.3v-1.5C24,14.1,23.8,13.6,23.4,13.3z M2,22.5C2,22.8,1.8,23,1.5,23H1V13h0.5 C1.8,13,2,13.2,2,13.5V22.5z M4,20.9c0,0.2-0.1,0.4-0.3,0.4L3,21.7v-7.4l0.7,0.4C3.9,14.8,4,14.9,4,15.1V20.9z M17,1.5 C17,1.2,17.2,1,17.5,1h2C19.8,1,20,1.2,20,1.5v12.4L17,15V1.5z M13,4.5C13,4.2,13.2,4,13.5,4H16v11.4l-1.4,0.5l-0.3-1.1 c-0.2-0.6-0.7-1-1.2-1.1V4.5z M9,9.5C9,9.2,9.2,9,9.5,9H12v4.8l-3,0.7V9.5z M23,16c0,0.2-0.1,0.4-0.3,0.4l-12,6.5 c-0.1,0.1-0.3,0.1-0.5,0L5,19.9v-3.5l7.7-1.7c0.3-0.1,0.5,0.1,0.6,0.4l0.5,1.6c0,0.1,0,0.3,0,0.4c-0.1,0.1-0.2,0.2-0.3,0.2l-3,0.7 c-0.3,0.1-0.4,0.3-0.4,0.6c0.1,0.2,0.3,0.4,0.5,0.4c0,0,0.1,0,0.1,0l3-0.7c0.4-0.1,0.7-0.4,0.9-0.7c0.1-0.2,0.2-0.4,0.2-0.6l7.6-2.8 c0.2-0.1,0.3,0,0.5,0.1c0.1,0.1,0.2,0.2,0.2,0.4V16z"></path> </g></svg></div>
            <h1>Marketing</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quasi distinctio repellat quo beatae numquam corrupti cupiditate dolore enim, dicta neque modi provident totam velit!</p>
            <div class="m-info">
                <a href="">More info</a>
                <div><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="arrow-right"> <g> <polyline data-name="Right" fill="none" id="Right-2" points="16.4 7 21.5 12 16.4 17" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="2.5" x2="19.2" y1="12" y2="12"></line> </g> </g> </g> </g></svg></div>
            </div>
        </div>
        <div class="s-block">
            <div><svg class="hero-svg" fill="#000000" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M22.5,2h-21C0.7,2,0,2.7,0,3.5v13C0,17.3,0.7,18,1.5,18H9v3H7.5C7.2,21,7,21.2,7,21.5S7.2,22,7.5,22h9 c0.3,0,0.5-0.2,0.5-0.5S16.8,21,16.5,21H15v-3h7.5c0.8,0,1.5-0.7,1.5-1.5v-13C24,2.7,23.3,2,22.5,2z M14,21h-4v-3h4V21z M23,16.5 c0,0.3-0.2,0.5-0.5,0.5h-21C1.2,17,1,16.8,1,16.5V15h22V16.5z M12,12c-1.1,0-2,0.9-2,2H5c0.3-3.6,3.3-6.5,7-6.5 c1.2,0,2.2,0.3,3.2,0.8l-2.7,3.8C12.4,12,12.2,12,12,12z M11,14c0-0.6,0.4-1,1-1s1,0.4,1,1H11z M13.4,12.6l2.6-3.8 c1.7,1.2,2.8,3.1,2.9,5.2h-5C14,13.4,13.8,12.9,13.4,12.6z M20,14c-0.3-4.2-3.7-7.5-8-7.5S4.3,9.8,4,14H3c0.3-4.7,4.2-8.5,9-8.5 c4.8,0,8.7,3.8,9,8.5H20z M23,14h-1c-0.3-5.3-4.6-9.5-10-9.5C6.7,4.5,2.3,8.7,2,14H1V3.5C1,3.2,1.2,3,1.5,3h21 C22.8,3,23,3.2,23,3.5V14z"></path> <g> <path d="M5.5,5h-3C2.2,5,2,4.8,2,4.5S2.2,4,2.5,4h3C5.8,4,6,4.2,6,4.5S5.8,5,5.5,5z"></path> </g> <g> <path d="M3.5,7h-1C2.2,7,2,6.8,2,6.5S2.2,6,2.5,6h1C3.8,6,4,6.2,4,6.5S3.8,7,3.5,7z"></path> </g> <g> <path d="M21.5,5h-3C18.2,5,18,4.8,18,4.5S18.2,4,18.5,4h3C21.8,4,22,4.2,22,4.5S21.8,5,21.5,5z"></path> </g> <g> <path d="M21.5,7h-1C20.2,7,20,6.8,20,6.5S20.2,6,20.5,6h1C21.8,6,22,6.2,22,6.5S21.8,7,21.5,7z"></path> </g> </g> </g></svg></div>
            <h1>SEO</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quasi distinctio repellat quo beatae numquam corrupti cupiditate dolore enim, dicta neque modi provident totam velit!</p>
            <div class="m-info">
                <a href="">More info</a>
                <div><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="arrow-right"> <g> <polyline data-name="Right" fill="none" id="Right-2" points="16.4 7 21.5 12 16.4 17" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="2.5" x2="19.2" y1="12" y2="12"></line> </g> </g> </g> </g></svg></div>
            </div>
        </div>
        <div class="s-block">
            <div><svg class="hero-svg" fill="#000000" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-351 153 256 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M-236.7,263.7l-5.5,0.2l0.2,34.8h5.3V263.7z M-242,228.6l4.5,6.9l0.6-46.5h-5.2V228.6z M-113.8,189h5.3v109.8h-5.3V189z M-210.7,266.5h12.5v20.4h-12.5V266.5z M-189.8,246.1h12.5v40.8h-12.5V246.1z M-168.8,238.2h12.5v48.8h-12.5V238.2z M-147.9,219.2 h12.5v67.8h-12.5V219.2z M-292.3,199.2c11.4,0,20.6-9.2,20.6-20.6s-9.2-20.6-20.6-20.6c-11.4,0-20.6,9.2-20.6,20.6 S-303.7,199.2-292.3,199.2z M-240.7,259h33.7c11.7,0,12.5-18.3-0.4-18.3h-32.3l-0.9-1.3l-17.8-25.8c-5.4-7.7-11.7-11-20.4-11h-27.5 c-8.7,0-15,3.6-20.4,11l-17.5,25.6V259v32.7c0,5,4.1,9.1,9.1,9.1s9.1-4.1,9.1-9.1v-45.2l8.3-11.9l0.2,157.7 c0,7.6,5.3,11.3,10.8,11.7c6,0.3,12.4-3.7,12.3-12.1l0.2-91.7h1.8h1.8l0.2,91.7c0,8.1,5.9,12.1,11.8,12.1c5.7,0,11.3-3.9,11.3-11.7 l0.3-157.7l14.1,20.2c2,3.1,5.6,4.2,8.5,4.2H-240.7z M-248.2,180v9h6.3h5.2h123h5.3h6.4v-9H-248.2z M-236.7,298.8h-5.3h-6.3v9h67.8 V307h6.6v0.8h71.7v-9h-6.4h-5.3H-236.7z M-173.9,307h-6.6v0.8v62.5l-29,29h9.3l19.7-19.7v19.7h6.6v-19.7l19.9,19.7h9.2l-29-29v-62.5 V307z"></path> </g></svg></div>
            <h1>Consulting</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quasi distinctio repellat quo beatae numquam corrupti cupiditate dolore enim, dicta neque modi provident totam velit!</p>
            <div class="m-info">
                <a href="">More info</a>
                <div><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="arrow-right"> <g> <polyline data-name="Right" fill="none" id="Right-2" points="16.4 7 21.5 12 16.4 17" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="2.5" x2="19.2" y1="12" y2="12"></line> </g> </g> </g> </g></svg></div>
            </div>
        </div>
        <div class="s-block">
            <div><svg class="hero-svg" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z"></path></g></svg></div>
            <h1>Digital support</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quasi distinctio repellat quo beatae numquam corrupti cupiditate dolore enim, dicta neque modi provident totam velit!</p>
            <div class="m-info">
                <a href="">More info</a>
                <div><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="arrow-right"> <g> <polyline data-name="Right" fill="none" id="Right-2" points="16.4 7 21.5 12 16.4 17" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline> <line fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="2.5" x2="19.2" y1="12" y2="12"></line> </g> </g> </g> </g></svg></div>
            </div>
        </div>

        
    </div>

</div>
