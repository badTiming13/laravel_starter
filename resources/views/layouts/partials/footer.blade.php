<style>
footer{
    background: black;
    color: white;
    min-height: 50vh;
    padding:1rem 3rem;
  
    
}
.m-footer{
    display: flex;
    justify-content: space-between
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
.s-footer{
    display: flex;
    gap: 2rem;
}
.s-footer h1{
    font-size: clamp(16px, 3vw, 24px);
    font-weight: 400;
}
</style>

<footer>
    <div class="m-footer">
        <div>
            <h1>Let's work together</h1>
            <button>Start a project</button>
        </div>
        <div>
            <svg fill="#2ad555" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M35.89062,128C52.001,136.22559,52,155.64258,52,172c0,24.7998,1.35254,40,28,40a4,4,0,0,1,0,8c-36,0-36-26.61426-36-48,0-24.7998-1.35254-40-28-40a4,4,0,0,1,0-8c26.64746,0,28-15.2002,28-40,0-21.38574,0-48,36-48a4,4,0,0,1,0,8C53.35254,44,52,59.2002,52,84,52,100.35742,52.001,119.77441,35.89062,128ZM240,124c-26.64746,0-28-15.2002-28-40,0-21.38574,0-48-36-48a4,4,0,0,0,0,8c26.64746,0,28,15.2002,28,40,0,16.35742-.001,35.77441,16.10938,44C203.999,136.22559,204,155.64258,204,172c0,24.7998-1.35254,40-28,40a4,4,0,0,0,0,8c36,0,36-26.61426,36-48,0-24.7998,1.35254-40,28-40a4,4,0,0,0,0-8Z"></path> </g></svg>
        </div>
    </div>

    <div class="s-footer">
        <div>
            <h1>Address</h1>
        </div>
        <div>
            <h1>Social</h1>
        </div>
    </div>
</footer>