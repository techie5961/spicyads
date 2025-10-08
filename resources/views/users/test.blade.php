 <form action='{{ url('users/post/claim/task/reward') }}' onsubmit='PostRequest(event,this,MyFunc.Completed)' class='w-full column g-5'>
        <input type='hidden' name='_token' class='input' value='{{ @csrf_token() }}'>
        <input type='hidden' name='id' class='input'>
        <label class='cont w-full p-10 c-green h-200 column justify-center g-5 pointer clip-10 br-10 border-dashed-2 border-color-green'>
           <div class='column prompt justify-center g-5'> 
            <span>Click to select screenshot</span>
            <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='CurrentColor' viewBox='0 0 256 256'><path d='M178.34,165.66,160,147.31V208a8,8,0,0,1-16,0V147.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32ZM160,40A88.08,88.08,0,0,0,81.29,88.68,64,64,0,1,0,72,216h40a8,8,0,0,0,0-16H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.12A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,100.8,66,8,8,0,0,0,3.2,15.34,7.9,7.9,0,0,0,3.2-.68A88,88,0,0,0,160,40Z'></path></svg>
            <span>JPG or PNG max=5MB</span>
        </div>
        <img src='' alt='' class='h-full prev-img display-none br-10 clip-10'>
        <input onchange=&quot;
       try{
     
        if(this.files[0]){
        document.querySelector('.prev-img').src=window.URL.createObjectURL(this.files[0]);
        document.querySelector('.prev-img').classList.remove('display-none');
        document.querySelector('.prompt').classList.add('display-none');
        }else{
          document.querySelector('.prev-img').classList.add('display-none');
        document.querySelector('.prompt').classList.remove('display-none');
        }
       }catch(error){
      this.closest('form').innerHTML+=error.stack;
       }
        &quot; type='file' accept='image/*' name='screenshot' class='display-none required input' >
        </label>
        <button class='post'>Submit & Claim Task Reward</button>
    </form>