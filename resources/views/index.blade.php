@extends('page')

@section('content')
<div class="projects">
    <h3><span>Past Projects</span></h3>    
        <div class="row">
        @foreach($projectData as $data)                        
            @if($iter % 4 ==0)
                 </div>
                 <div class="row">
            @endif
            <div class="col-md-4">
                <div class="portfolio-item">
                    <img class="img-fluid" src= {{$path . $data['image']}} alt= {{$data['header']}}>
                    <div class="portfolio-title">
                        <h3> {{$data['header']}} </h3>
                        <p> {{$data['description']}} </p>
                    </div>
                </div> 
             </div>   
            @if($iter % 3 ==0)
            </div>
            @endif 
            <?php
            $iter++; 
            ?>           
        @endforeach          
        </div> 
</div>
@endsection
