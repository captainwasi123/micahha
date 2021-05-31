<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> @yield('title')  - Micahha </title>
      
      @include('web.includes.style')
      @yield('addStyle')
   </head>
   <body>
      <!-- Header Starts Here -->
         @include('web.includes.header')
      <!-- Header Ends Here -->

      @yield('content')

      <!-- Art Section Ends Here -->
      <!-- Footer Section Starts Here -->
         @include('web.includes.footer')
      <!-- Footer Section Ends Here -->
      <!-- Bootstrap Javascript -->
         @include('web.includes.scripts')
   </body>
</html>