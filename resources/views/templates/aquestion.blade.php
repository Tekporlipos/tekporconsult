<input type="text" style="display: none" value="{{$_GET['page']}}" name="page" id="repage">
<form method="get" class="code">
    <input type="hidden" name="usage" id="usageHidden" value="unfriendly">
      <input type="hidden" name="page" id="pagination" value="{{$_GET['page']}}">
      <input type="hidden" name="title"  value="{{$quizName->title}}">
    <input type="hidden" name="token" id="token" value="IHJUIA34sfafajklmka;555;stF66E3wggfgh%aaf*fafada335f*(sfsf(hhUIcwOIEfy3E">
  
      
          <div class="container" >
            <div style="margin-left: 40%; cursor: pointer">
              <div class="btn-group pagination pagination-lg" role="group" aria-label="...">
                <nav>
                    <ul class="pagination">
                        @if ($_GET['page'] < 2)
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">« Previous</span>
                        </li>
                        @else
                        <li class="page-item" onclick="next('response','{{$quizName->id}}','{{$_GET['page']-1}}','{{$quizName->title}}');startnewtimee()">
                            <a class="page-link" href="#response"  rel="Prev">« Previous</a>
                        </li>
                        @endif
                                        @if (sizeOf($questions) <= 0)
                                        <li class="page-item disabled" aria-disabled="true">
                                            <span class="page-link">Next »</span>
                                        </li>  
                                        @else
                                        <li class="page-item" onclick="next('response','{{$quizName->id}}','{{$_GET['page']+1}}','{{$quizName->title}}');startnewtimee();">
                                            <a class="page-link" href="#response"  rel="next">Next »</a>
                                        </li>
                                        @endif
                                                            
                                                    </ul>
            </nav>
                 <hr>
                 <hr>
                 
                  </div>
             </div>
             <ol>
               @if ($_GET['title']== $quizName->title)
@if (sizeOf($questions) <= 1)
    <div class="text-danger text-center">
There is  no more question in our question bank 😢️.
    </div>
@endif
               @foreach ($questions as $key => $quest)
                 
  
               <div class="row">
                <div class="col-md-8">
                 <i class="fas fa-divide    ">
                     
                     <p>
                       
                     <li id="question{{ $key + 1 }}" style="font-size:20px"> <b> {!!$quest->question!!}</b>  </li> 
                     </p>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option1_code}}"> {!!$quest->option1!!}<br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a"  value="{{$quest->option2_code}}"> {!!$quest->option2!!} <br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option3_code}}"> {!!$quest->option3!!} <br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option4_code}}"> {!!$quest->option4!!} <br>
                         <input type="radio" name="question{{ $key + 1 }}" id="a" value="{{$quest->option5_code}}"> {!!$quest->option5!!}
     <br>
     <br>
                         <input type="button" id="disableSide{{ $key + 1 }}" style="display:none" onclick="solution('solution{{ $key + 1 }}')"  value="Show Answer">
                     <hr>
                 </i>
                
                </div>
                <div class="col-md-4">
                    <i class="fas fa-h3    "> <u>Solution</u> </i>
     
                    <div id="solution{{ $key + 1 }}" style="display:none">
                   <b> <em> {!!$quest->solution!!}</em> </b> 
                 </div>
     
                </div>
            </div>
     
    
               @endforeach
              
               @endif
             
             </ol>
             
             
      <br>
      <div class="text-center">
          <input class="btn btn-lg btn-primary" type="submit" id="submited" value="SUBMIT"><br/><br>
          <button type="button" class="btn btn-primary" onclick="">  <a href="#question1" style="color:white">Review</a> </button>
      </div>
      
                      <br>
                      <div style="margin-left: 40%; cursor: pointer">
                        <div class="btn-group pagination pagination-lg" role="group" aria-label="...">
                          <nav>
                            <ul class="pagination">
                                @if ($_GET['page'] < 2)
                                <li class="page-item disabled" aria-disabled="true">
                                    <span class="page-link">« Previous</span>
                                </li>
                                @else
                                <li class="page-item" onclick="next('response','{{$quizName->id}}','{{$_GET['page']-1}}','{{$quizName->title}}');startnewtimee()">
                                    <a class="page-link" href="#response"  rel="Prev">« Previous</a>
                                </li>
                                @endif
                                                @if (sizeOf($questions) <= 1)
                                                <li class="page-item disabled" aria-disabled="true">
                                                    <span class="page-link">Next »</span>
                                                </li>  
                                                @else
                                                <li class="page-item" onclick="next('response','{{$quizName->id}}','{{$_GET['page']+1}}','{{$quizName->title}}');startnewtimee()">
                                                    <a class="page-link" href="#response"  rel="next">Next »</a>
                                                </li>
                                                @endif
                                                                    
                                                            </ul>
                      </nav>
                           <hr>
                           <hr>
                           
                            </div>
                       </div>
              
              <br>
              <br>
          </div>
              
  </form>