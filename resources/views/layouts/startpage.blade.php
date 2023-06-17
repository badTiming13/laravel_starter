<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.typekit.net/cfl2vuo.css">
    
</head>
<style>




    body{
        font-family: "june-expt-variable", sans-serif;
        font-variation-settings: "STYL" 0;
        -webkit-font-smoothing: antialiased;
        color: black;
        font-weight: 400;
    }
  
</style>
<body>
@include('layouts.partials.navbar') 


<section> 
@include('layouts.partials.hero') 
</section>

<section>
    @include('layouts.partials.heromain')
</section>

<section>
    @include('layouts.partials.whyus')
</section>
{{--}}
<section>
    @include('layouts.partials.services')
</section>
<h1>welcome to Laravel</h1>
 {{--}}   
 <div class="cursor"></div>

</body>
</html>

