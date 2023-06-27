<style>
footer{
    background: black;
    color: white;
    display: flex;
    flex-direction: column;
    gap: 2rem;
    padding:0 3rem;
    text-align: center;
    
}
.m-footer{
    display: flex;
    justify-content: space-around;
    padding-block: 2rem;
}
.m-footer svg{
    width: 200px;
    fill: rgb(24, 59, 59);
}
.m-footer h1{
    font-size: clamp(25px, 4vw, 48px);
    font-weight: 400;
}
.m-footer button{
    cursor: pointer;
    font-family: "june-expt-variable", sans-serif;
    border: 2px solid white;
    padding: 1rem 3rem;
    background: black;
    border-radius: 2rem;
    color: white;
    font-size: clamp(10px, 2vw, 14px);
    transition: all .5s ease;
}
.m-footer button:hover{
    color: black;
    background: white;
}
.btns{
    display: flex;
    gap: 1rem;
}

.center{
    display: flex;
    align-items: center;
    justify-content: center;
}
#a-blog{
    color: white;
    text-decoration: underline;
}
@media (max-width: 1350px){
        .m-footer{
           flex-direction: column;
           align-items: center;
           gap: 2rem;
        }
        .center svg{
            width: 150px;
            height: 150px;
        }
        
    }
    @media (max-width: 1350px){
       
        .center svg{
            width: 100px;
            height: 100px;
        }
        
    }

    @media (max-width: 650px){
       .btns{
        flex-direction: column;
       }
       footer{
        gap: 0;
       }
        
    }


</style>

<footer>
    <div class="m-footer">
        <div>
            <h1>Let's work together</h1>
            <div class="btns">
                <button>Start a project</button>
                <button>Ask a question</button>
            </div>
            
           
        </div>
       
            <div class="center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 36 32" enable-background="new 0 0 36 32" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#3ea87a" d="M14.191,16.087c-0.195-0.195-0.512-0.195-0.707,0l-3.517,3.516c-0.094,0.094-0.146,0.221-0.146,0.354 s0.053,0.26,0.146,0.354l3.517,3.517c0.098,0.098,0.226,0.146,0.354,0.146s0.256-0.049,0.354-0.146 c0.195-0.195,0.195-0.512,0-0.707l-3.163-3.163l3.163-3.163C14.386,16.599,14.386,16.283,14.191,16.087z"></path> <path fill="#3ea87a" d="M19.857,23.827c0.098,0.098,0.226,0.146,0.354,0.146s0.256-0.049,0.354-0.146l3.516-3.517 c0.195-0.195,0.195-0.512,0-0.707l-3.516-3.516c-0.195-0.195-0.512-0.195-0.707,0s-0.195,0.512,0,0.707l3.163,3.163l-3.163,3.163 C19.662,23.315,19.662,23.632,19.857,23.827z"></path> <path fill="#3ea87a" d="M17.383,16.325l-1.671,7.033c-0.064,0.269,0.102,0.539,0.371,0.602c0.039,0.009,0.078,0.014,0.116,0.014 c0.226,0,0.431-0.155,0.486-0.384l1.671-7.033c0.064-0.269-0.102-0.539-0.371-0.602C17.718,15.892,17.448,16.057,17.383,16.325z"></path> <path fill="#3ea87a" d="M0,30.5C0,31.327,0.673,32,1.5,32h33c0.827,0,1.5-0.673,1.5-1.5v-18c0-0.276-0.224-0.5-0.5-0.5 S35,12.224,35,12.5v18c0,0.276-0.224,0.5-0.5,0.5h-33C1.224,31,1,30.776,1,30.5v-18C1,12.224,0.776,12,0.5,12S0,12.224,0,12.5V30.5 z"></path> <path fill="#3ea87a" d="M34.5,0h-33C0.673,0,0,0.673,0,1.5v8C0,10.327,0.673,11,1.5,11h33c0.827,0,1.5-0.673,1.5-1.5v-8 C36,0.673,35.327,0,34.5,0z M35,9.5c0,0.276-0.224,0.5-0.5,0.5h-33C1.224,10,1,9.776,1,9.5v-8C1,1.224,1.224,1,1.5,1h33 C34.776,1,35,1.224,35,1.5V9.5z"></path> <circle fill="#3ea87a" cx="4" cy="5.5" r="1"></circle> <circle fill="#3ea87a" cx="7" cy="5.5" r="1"></circle> <circle fill="#3ea87a" cx="10" cy="5.5" r="1"></circle> </g> </g></svg>
            </div>
    </div>

    <p>Copyright - AutomateMe 2023</p>
</footer>