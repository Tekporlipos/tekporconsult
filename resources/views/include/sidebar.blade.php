<div class="sidebar-box ftco-animate">
    <h3>Category</h3>
  <ul class="categories">
    <hr>
    <li><a href="../../Games">Games <span>(99+)</span></a></li>
    <li><a href="../../store">Books <span>(99+)</span></a></li>
    <li><a href="../../store">Store <span>(99+)</span></a></li>
    <li><a href="../../category">Tutorials <span>(100+)</span></a></li>
  </ul>
</div>

<div class="sidebar-box ftco-animate" style="display:none">
  <h3>Popular Articles</h3>
  <div class="bg-light">
    <a class="blog-img mr-4" style="background-image: url(../images/image_1.jpg);"></a>
    <div class="text">
      <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
        <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
      </div>
    </div>
  </div>
  <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(../images/image_2.jpg);"></a>
    <div class="text">
      <h3 class="heading"><a href="#">When the going get tough the tough get librarian </a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
        <div><a href="#"><span class="icon-person"></span> Joan Bauer</a></div>
        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
      </div>
    </div>
  </div>
  <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(../images/image_3.jpg);"></a>
    <div class="text">
      <h3 class="heading"><a href="#">God has given us power to dream of anything anything that can be dream of can be built, anyone who says otherwise is a fool.</a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
        <div><a href="#"><span class="icon-person"></span> Davinci</a></div>
        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
      </div>
    </div>
  </div>
</div>

<div class="sidebar-box ftco-animate">
  <h3>Popular Tags</h3>
  <ul class="tagcloud m-0 p-0" style="font-family: cursive;">
    <a href="/forum?tag=Mathematics" class="tag-cloud-link">Mathematics</a>
    <a href="/forum?tag=relationship " class="tag-cloud-link">relationship </a>
    <a href="/forum?tag=Others" class="tag-cloud-link">Others</a>
    <a href="/forum?tag=Languages" class="tag-cloud-link">Languages</a>
    <a href="/forum?tag=Art" class="tag-cloud-link">Art</a>
    <a href="/forum?tag=Business" class="tag-cloud-link">Business</a>
    <a href="/forum?tag=Programming" class="tag-cloud-link">Programming</a>
  </ul>
</div>

<div class="sidebar-box ftco-animate">
  <h3>Archives</h3>
  <ul class="categories">
    <li><a href="#">March 2020 <span>(21)</span></a></li>
    <li><a href="#">April 2020 <span>(47)</span></a></li>
    <li><a href="#">May 2020 <span>(52)</span></a></li>
    <li><a href="#">June 2020 <span>(7)</span></a></li>
  </ul>
</div>


<div class="sidebar-box ftco-animate">
  <h3>Blogs</h3>
<?php
use App\quizing;
use App\admin;
use Carbon\Carbon;
$quizing =  quizing::orderBy('id','desc')->take(1)->get();
?>
  @foreach ($quizing as $item)

  <?php
        $id = $item->admin;
        $admins = admin::where('name',$id)->take(1)->get();
        ?>
  <div class="block-21 mb-4 d-flex">
    <div class="text">
      <p>
        {{substr($item->description,0,200)  }}
      </p>
      <div class="meta">
      <div><a href="Quizname/<?php echo str_replace("/", "⚡", $item->title)?>"><span class="icon-calendar"></span> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a></div>
        @foreach($admins as $adm)

      <div><a href="../../admin/{{$adm->name}}"><span class="icon-person"></span> {{ substr($adm->name,0,7)  }}</a></div>
        @endforeach
        <div><a href="Quizname/<?php echo str_replace("/", "⚡", $item->title)?>"><span class="icon-chat"></span>Quiz</a></div>
      </div>
    </div>
  </div>
  @endforeach

  <?php
use App\books;
$books =  books::orderBy('id','desc')->take(1)->get();
?>
  @foreach ($books as $item)

  <?php
        $id = $item->admin;
        $admins = admin::where('name',$id)->take(1)->get();
        ?>
  <div class="block-21 mb-4 d-flex">
    <div class="text">
      <p>
        {{substr($item->description,0,200)  }}
      </p>
      <div class="meta">
      <div><a href="Bookname/<?php echo str_replace("/", "⚡", $item->title)?>"><span class="icon-calendar"></span> {{Carbon::now('UTC')->createFromTimeStamp(strtotime($item->created_at))->diffForHumans()}}</a></div>
        @foreach($admins as $adm)

      <div><a href="../../admin/{{$adm->name}}"><span class="icon-person"></span> {{ substr($adm->name,0,7)  }}</a></div>
        @endforeach
        <div><a href="Bookname/<?php echo str_replace("/", "⚡", $item->title)?>"><span class="icon-chat"></span>Store</a></div>
      </div>
    </div>
  </div>
  @endforeach

</div>