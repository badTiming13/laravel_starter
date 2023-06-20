<style>
 .hc-main{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 30vh;
   
    transition: all 2s ease;
 }
 .hc-main a{
    font-size: clamp(18px, 3vw, 32px);
    /*color: transparent;
    -webkit-text-stroke: 1px black;
        text-stroke: 1px black;
        */
    text-transform: lowercase;
    font-weight: lighter;
    color: white;
    -webkit-text-stroke: 1px rgba(0, 0, 0, 0.426);
 }

 #hc-link{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5rem;
    width: 400px;
    background: rgba(255, 255, 0, 0.389);
    transition: all 2s ease;
 }
 #hc-link:hover{
    width: 80%;
    border-radius: 1rem;
    
 }
</style>

<div class="hc-main">
    <div id="hc-link">
        <a href="#">Say hello!</a>
    </div>
</div>