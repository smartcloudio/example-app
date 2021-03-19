@extends('layouts.template')
@section('content')
<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
      <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">LARAVEL WEB APP - PHP + MYSQL</h6>
      <small>IFRO, Ji-Paraná/RO 2021 </small>
    </div>
  </div>
  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Updates Recentes</h6>
    <div class="text-muted pt-12">
        <strong>0.0.1 - First Commit</strong>
         <br/>
          This is the first commit from the example-app project developer with Laravel PHP.
      </div>
      <hr/>

      <div class="text-muted pt-12">
        <strong>0.0.2 - Second Commit</strong>
       
         Add Boostrap Template with blade Base layout to use 
         <strong> 
           <?php $str = "@yield('content')";echo htmlspecialchars($str);?>
        </strong>
           in template.
        <br> Now we use the sigle code for new views: 
        <br/> 
        <div style="margin: 20px 20px 20px 20px">
        <strong> 
           <?php $str1 = "@extends('layouts.template') //Load the template";echo htmlspecialchars($str1);?>
           <br/>
           <?php $str2 = "@section('content') // Define the sesction contet";echo htmlspecialchars($str2);?>
           </br>
           <code>	Here the code to show in content session</code>	
           <br/>
           <?php $str3 = "@endsection // the close tag";echo htmlspecialchars($str3);?>
        </strong>
        </div>
      </div>
      <hr/>


      <div class="text-muted pt-12">
        <strong>0.0.3 - Third Commit</strong>
         <br/>
         Coming son. A brake for a coffe!
      </div>
      <hr/>

      
  </div>
  @endsection


