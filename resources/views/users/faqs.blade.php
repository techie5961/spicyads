@extends('layout.users.index')
@section('title')
    FAQs
@endsection
@section('main')
    <section class="w-full pc-x-padding c-black grid pc-grid-2 g-10 p-20">
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">1. What is {{ config('app.name') }}?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
                SpicyAds is an online earning platform where users can complete tasks, spin-and-win for rewards, and place adverts. It is designed to be simple, secure, and rewarding for everyone.

            </span>
        </div>
        {{-- NEW QUESTION --}}
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">2. How do I start earning on SpicyAds?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
                Simply create an account, log in, and explore available tasks. You can also use the spin-and-win feature or place adverts if you want to promote your business while earning.

            </span>
        </div>
         {{-- NEW QUESTION --}}
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">3. How are payments made?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
              Earnings are credited to your SpicyAds wallet. You can withdraw using supported payment methods such as bank transfer or mobile money, depending on your region.
 
            </span>
        </div>
          {{-- NEW QUESTION --}}
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">4. Can I have more than one account?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
            No. Each user is allowed only one account. Creating multiple accounts for unfair advantage will lead to suspension and loss of earnings.

            </span>
        </div>
         {{-- NEW QUESTION --}}
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">5. Is advertising on SpicyAds effective?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
            Yes. By placing adverts on SpicyAds, you reach a growing community of active users. This helps businesses gain visibility and engagement while also rewarding users.

            </span>
        </div>
        {{-- NEW QUESTION --}}
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">6. How does the spin-and-win feature work?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
           The spin-and-win feature gives users the chance to earn extra rewards. Spins may include bonuses, extra task earnings, or discounts on adverts.

            </span>
        </div>
          {{-- NEW QUESTION --}}
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">7. What happens if I violate the rules?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
           Accounts found engaging in fraud, spamming, or policy violations may be suspended or permanently terminated. Balances from such accounts will be forfeited.

            </span>
        </div>
           {{-- NEW QUESTION --}}
        <div class="w-full house max-w-500 bg-white box-shadow br-10 column g-5 p-20">
            <div class="w-full row space-between align-center">
                <strong class="font-1">8. How do I contact support?</strong>
              <svg class="transition-ease-1s" onclick="
             try{
              if(this.classList.contains('active')){
              this.style.transform='rotate(0deg)';
              this.classList.remove('active');
              this.closest('.house').querySelector('.answer').classList.add('display-none');

              }else{
               this.style.transform='rotate(180deg)';
              this.classList.add('active');
              this.closest('.house').querySelector('.answer').classList.remove('display-none');

              }
             }catch(error){
             alert(errir.stack)
             }
              " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M212.24,100.24l-80,80a6,6,0,0,1-8.48,0l-80-80a6,6,0,0,1,8.48-8.48L128,167.51l75.76-75.75a6,6,0,0,1,8.48,8.48Z"></path></svg>

            </div>
            <span class="display-none answer">
           You can reach us anytime on whatsapp. Our team is ready to help you with any issues or questions.

            </span>
        </div>
    </section>
@endsection