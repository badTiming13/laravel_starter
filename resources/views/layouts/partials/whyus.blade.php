<style>
    .why-body{
        display: flex;
        flex-direction: column;
        padding:1rem 3rem;
        
    }
    .why-body h1{
        position: relative;
        color: transparent;
        -webkit-text-stroke: 1px black;
        text-stroke: 1px black;
        width: fit-content;
      font-size: clamp(18px, 3vw, 32px);
    }
    .why-body h1:before{
        position: absolute;
        content: '';
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background:  rgba(255, 255, 0, 0.389);
        top: -15px;
        left: -18px;
        z-index: -1;
        transition: all 1s ease;
    }

    p{
        font-size: 1rem;
        line-height: 1.5;
       
    }
    @media(max-width: 500px){
        .why-body{
            padding: 0 1rem;
        }
        .why-body h1{
            font-size: 1.5rem;
        }
    }
</style>

<div class="why-body" >
    <h1 style="font-weight: 400;">Why us?</h1>
    <p>We bring <span>innovation</span> and <span>passion</span> to the world of web development. We may be young, but we are driven by a relentless desire to create <span>exceptional digital experiences</span> for our clients.</p>
    <p>Our focus is always on the best interests of our clients. We take the time to listen, <span>understand</span>, and <span>collaborate</span> closely with you to ensure that we deliver tailored solutions that <span>exceed your expectations</span>. Whether you need a <span>stunning website</span>, an e-commerce platform, or a robust web application, we are here to transform your <span>vision into reality</span>.</p>
    <p>Let's create digital experiences that captivate, engage, and drive <span>success for your business</span>.</p>
</div>