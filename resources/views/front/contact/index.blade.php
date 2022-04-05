@extends('layouts.front')

@section('content')

<div class="offset2"></div>
<iframe
 src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2499.4483800426133!2d3.2241689!3d51.2108153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c350cfcf934d7d%3A0xa4d8f385ffa7d70b!2sChoco-Story!5e0!3m2!1sen!2str!4v1534408440419"
 width="100%" height="400" frameborder="0" style="border:0; display:block;" allowfullscreen></iframe>
<div class="light-wrapper">
 <div class="container inner">
  <div class="row">
   <div class="col-sm-8">
    <h3 class="section-title">Feel Free to Drop Me a Line</h3>
    <p>Maecenas vehicula condimentum consequat. Ut suscipit ipsum eget leotero convallis feugiat upsoyut fermentum leo
     auctor consequat turpis aturo nisiper. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna
     mollis.</p>
    <div class="divide20"></div>
    <div class="form-container">
     <div class="response alert alert-success"></div>
     <form class="forms" action="contact/form-handler.php" method="post">
      <fieldset>
       <ol>
        <li class="form-row text-input-row name-field">
         <input type="text" name="name" class="text-input defaultText required" title="Name (Required)" />
        </li>
        <li class="form-row text-input-row email-field">
         <input type="text" name="email" class="text-input defaultText required email" title="Email (Required)" />
        </li>
        <li class="form-row text-input-row subject-field">
         <input type="text" name="subject" class="text-input defaultText" title="Subject" />
        </li>
        <li class="form-row text-area-row">
         <textarea name="message" class="text-area required"></textarea>
        </li>
        <li class="form-row hidden-row">
         <input type="hidden" name="hidden" value="" />
        </li>
        <li class="nocomment">
         <label for="nocomment">Leave This Field Empty</label>
         <input id="nocomment" value="" name="nocomment" />
        </li>
        <li class="button-row">
         <input type="submit" value="Submit" name="submit" class="btn btn-submit bm0" />
        </li>
       </ol>
       <input type="hidden" name="v_error" id="v-error" value="Required" />
       <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
      </fieldset>
     </form>
    </div>
    <!-- /.form-container -->
   </div>
   <!-- /.span8 -->
   <aside class="col-sm-4 sidebar lp20">
    <div class="sidebox widget">
     <h3 class="section-title widget-title">Address</h3>
     <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed
      posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
     <address>
      <strong>Finch, Inc.</strong><br>
      Moon Street Light Avenue, 14/05 <br>
      Jupiter, JP 80630<br>
      <abbr title="Phone">P:</abbr> 00 (123) 456 78 90 <br>
      <abbr title="Email">E:</abbr> <a href="mailto:#">first.last@email.com</a>
     </address>
    </div>
    <!-- /.widget -->
   </aside>
   <!-- /.span4 -->
  </div>
  <!-- /.row -->
 </div>
</div>

@endsection