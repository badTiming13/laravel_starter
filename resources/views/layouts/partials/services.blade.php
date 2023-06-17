<style>
.acc-body{
    display: flex;
    
    justify-content: space-between;
    align-items: center;
    color: #4b4b4b;
}
#acc-t{
    font-size: 3rem;
    color: #4b4b4b20;
    text-transform: uppercase;
}
.accordion{
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
   
}
.li{
    text-align: left;
    
}
.accordion > li{
    width: 100%;
    
    border-bottom: 1px solid #4b4b4b;
}
.accordion > li:hover{
   background-color: #e2ee06;
}

.acc-item{
    display: flex;
    flex-direction: row-reverse;
    gap: 3rem;
    align-items: center;
    font-weight: 100;
    justify-content: space-between;
    font-size: 2rem;
    padding-inline: 1rem;
}
#answer{
padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
#answer > p{
    font-size: 1rem;
}
.plus{
    transition: all .5s cubic-bezier(0.215, 0.610, 0.355, 1);
    display: flex;
}
.acc-item.active > .plus{
    transform: rotate(180deg);
}
</style>


<div class="acc-body">
    <ul class="accordion">
        
        <li  class="litem">
            
            <h1 class="acc-item">
                <div class="plus"><svg fill="#4b4b4b" width="46px" height="46px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <title>plus</title> <path d="M30 15.25h-13.25v-13.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 13.25h-13.25c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h13.25v13.25c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-13.25h13.25c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg></div>
                Webdevelopment
            </h1>
            <div id="answer">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae placeat nulla praesentium. Itaque nihil dicta facere tempora tenetur eos magnam sapiente nesciunt eius perferendis hic, eum distinctio molestiae numquam deleniti!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque omnis, iure aliquam in dignissimos impedit tempore, corrupti facere error nemo odio aperiam dolores itaque neque enim tenetur eius iusto labore!</p>
            </div>
        </li>
        
        <li class="litem">
            
            <h1 class="acc-item">
                <div class="plus"><svg fill="#4b4b4b" width="46px" height="46px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <title>plus</title> <path d="M30 15.25h-13.25v-13.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 13.25h-13.25c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h13.25v13.25c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-13.25h13.25c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg></div>
                UI/UX design
            </h1>
            <div id="answer">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae placeat nulla praesentium. Itaque nihil dicta facere tempora tenetur eos magnam sapiente nesciunt eius perferendis hic, eum distinctio molestiae numquam deleniti!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque omnis, iure aliquam in dignissimos impedit tempore, corrupti facere error nemo odio aperiam dolores itaque neque enim tenetur eius iusto labore!</p>
            </div>
        </li>

        <li class="litem">
            <h1 class="acc-item">
                <div class="plus"><svg fill="#4b4b4b" width="46px" height="46px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <title>plus</title> <path d="M30 15.25h-13.25v-13.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 13.25h-13.25c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h13.25v13.25c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-13.25h13.25c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg></div>               
                Marketing
            </h1>
            <div id="answer">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae placeat nulla praesentium. Itaque nihil dicta facere tempora tenetur eos magnam sapiente nesciunt eius perferendis hic, eum distinctio molestiae numquam deleniti!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque omnis, iure aliquam in dignissimos impedit tempore, corrupti facere error nemo odio aperiam dolores itaque neque enim tenetur eius iusto labore!</p>
            </div>
        </li>

        <li class="litem">
            <h1 class="acc-item">
                <div class="plus"><svg fill="#4b4b4b" width="46px" height="46px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <title>plus</title> <path d="M30 15.25h-13.25v-13.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 13.25h-13.25c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h13.25v13.25c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-13.25h13.25c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg></div>                
                Branding
            </h1>
            <div id="answer">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae placeat nulla praesentium. Itaque nihil dicta facere tempora tenetur eos magnam sapiente nesciunt eius perferendis hic, eum distinctio molestiae numquam deleniti!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque omnis, iure aliquam in dignissimos impedit tempore, corrupti facere error nemo odio aperiam dolores itaque neque enim tenetur eius iusto labore!</p>
            </div>
        </li>

        <li class="litem">
            <h1 class="acc-item">
                <div class="plus"><svg fill="#4b4b4b" width="46px" height="46px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <title>plus</title> <path d="M30 15.25h-13.25v-13.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 13.25h-13.25c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h13.25v13.25c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-13.25h13.25c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg></div>               
                Consulting
            </h1>
            <div id="answer">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae placeat nulla praesentium. Itaque nihil dicta facere tempora tenetur eos magnam sapiente nesciunt eius perferendis hic, eum distinctio molestiae numquam deleniti!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque omnis, iure aliquam in dignissimos impedit tempore, corrupti facere error nemo odio aperiam dolores itaque neque enim tenetur eius iusto labore!</p>
            </div>
        </li>

        <li class="litem">
            <h1 class="acc-item">
                <div class="plus"><svg fill="#4b4b4b" width="46px" height="46px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <title>plus</title> <path d="M30 15.25h-13.25v-13.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 13.25h-13.25c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h13.25v13.25c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-13.25h13.25c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0z"></path> </g></svg></div>
                Digital support
            </h1>
            <div id="answer">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae placeat nulla praesentium. Itaque nihil dicta facere tempora tenetur eos magnam sapiente nesciunt eius perferendis hic, eum distinctio molestiae numquam deleniti!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque omnis, iure aliquam in dignissimos impedit tempore, corrupti facere error nemo odio aperiam dolores itaque neque enim tenetur eius iusto labore!</p>
            </div>
        </li>
    </ul>

    <div >
        <h1 id="acc-t" style="writing-mode: vertical-rl; transform: rotate(180deg);">Services</h1>
    </div>
</div>

<script>
var acc = document.getElementsByClassName("acc-item");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    var plus = document.getElementsByClassName("plus")[0];
    
    
    
   console.log(plus);
   
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      
      
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      
    } 
  });
}
</script>