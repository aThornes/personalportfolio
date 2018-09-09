@extends('page')

@section('content')
<div class="projects">
    <h3><span>Past Projects</span></h3>    
        <div class="row">
        @foreach($projectData as $key => $data)                        
            @if($iter % 4 ==0)
                 </div>
                 <div class="row">
            @endif
            <div class="col-md-4">
                <div class="portfolio-item" data-toggle="modal" data-target="#modal-{{$key}}">                  
                    <img class="img-fluid" src= {{$path . $data['image']}} alt= {{$data['header']}}>
                    <div class="portfolio-title">
                        <h3> {{$data['header']}} </h3>
                        <p> {{$data['description']}} </p>
                    </div>                  
                </div> 
             </div>   
            @if($iter % 4 ==0)
            </div>
            @endif 
            <?php
            $iter++; 
            ?>           
        @endforeach         
        </div>
        @foreach($projectData as $key => $data)        
          <div class="modal fade" id="modal-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{$data['header']}}</h4>
                  </div>
                  <div class="modal-body">
                      {{-- <img class="img-fluid" src= {{$path . $data['image']}} alt= {{$data['header']}}> --}}
                      {{$data['full_description']}}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>          
        @endforeach
          </div>  
        </div>    
</div>
@endsection

