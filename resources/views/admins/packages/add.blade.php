@extends('layout.admins.app')
@section('title')
    Add Package
@endsection
@section('main')
    <section class="w-full column g-10 p-10">
        <form action="{{ url('admins/post/packages/add/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Added)" class="w-full bg-white br-10 p-10 column g-10">
           <input type="hidden" name="_token" class="input" value="{{ @csrf_token() }}">
          <div class="row w-full g-10 align-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64ZM96,56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM224,80v32H192v-8a8,8,0,0,0-16,0v8H80v-8a8,8,0,0,0-16,0v8H32V80Zm0,112H32V128H64v8a8,8,0,0,0,16,0v-8h96v8a8,8,0,0,0,16,0v-8h32v64Z"></path></svg>

             <strong class="c-bg-secondary desc">Edit Site Package</strong>
           </div>
           <hr>
           <label for="">Package Name</label>
           <div class="w-full br-10 bg-dim h-50 border-1 border-color-silver">
            <input placeholder="E.g Alpha Package" value="{{ $package->name }}" type="text" name="name" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
            <label class="display-none" for="">Registration Fee</label>
           <div class="w-full display-none br-10 bg-dim h-50 border-1 border-color-silver">
            <input value="0" placeholder="E.g 3000" type="number" step="any" name="fee" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
            <div class="w-full house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm106.84,0h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z"></path></svg>

                <strong class="desc c-bg-secondary">Welcome Bonus</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">welcome bonus amount for this package</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input placeholder="E.g 500" type="number" step="any" value="{{ $package->cashback }}" name="cashback" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
           <div class="w-full house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M128,76a44,44,0,1,1-44,44A44,44,0,0,1,128,76Zm48-12h16V80a8,8,0,0,0,16,0V64h16a8,8,0,0,0,0-16H208V32a8,8,0,0,0-16,0V48H176a8,8,0,0,0,0,16Zm45.35,40.11a8,8,0,0,0-6.57,9.21A88.85,88.85,0,0,1,216,128a87.62,87.62,0,0,1-22.24,58.41A79.86,79.86,0,0,0,172,165.1a4,4,0,0,0-4.84.32,59.81,59.81,0,0,1-78.27,0A4,4,0,0,0,84,165.1a79.71,79.71,0,0,0-21.79,21.31A88,88,0,0,1,128,40a88.76,88.76,0,0,1,14.68,1.22,8,8,0,0,0,2.64-15.78,103.92,103.92,0,1,0,85.24,85.24A8,8,0,0,0,221.35,104.11Z"></path></svg>
                
                <strong class="desc c-bg-secondary">Referral Commission</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>

            <span class="text-dim">Bonus earned from referrals</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input placeholder="E.g 2500" type="number" step="any" value="{{ $package->subordinate }}" name="subordinate" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
           <div class="w-full display-none house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136ZM144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17A8,8,0,0,0,24,208H192a8,8,0,0,0,6.13-13.15C183.18,177.07,164.6,164.44,144,157.68Z"></path></svg>
                
                <strong class="desc c-bg-secondary">First Indirect</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Bonus earned from first indirect referrals</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input placeholder="E.g 1500" value="0" type="number" step="any" name="first_indirect" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
            <div class="w-full display-none house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64Zm-21.61,74.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z"></path></svg>

                <strong class="desc c-bg-secondary">Free Data</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Free data allocation in GB</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input value="0" placeholder="E.g 1" type="number" step="any" name="free_data" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
           <div class="w-full display-none house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M222.33,123.89c-.06-.13-.12-.26-.19-.38L192,69.91V32a16,16,0,0,0-16-16H80A16,16,0,0,0,64,32V69.9L33.86,123.51c-.07.12-.13.25-.2.38a15.94,15.94,0,0,0,1.46,16.57l.11.14,77.61,100.81A4,4,0,0,0,120,239V154.63a24,24,0,1,1,16,0V239a4,4,0,0,0,7.16,2.44l77.6-100.81.11-.14A15.92,15.92,0,0,0,222.33,123.89ZM176,64H80V32h96Z"></path></svg>

                <strong class="desc c-bg-secondary">Article Writing</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Article writing earning amount</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input value="0" placeholder="E.g 5,000" type="number" step="any" name="article_writing" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
           <div class="w-full display-none house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M220.49,207.8,207.8,220.49a12,12,0,0,1-17,0l-56.57-56.57L115,214.08l-.13.33A15.84,15.84,0,0,1,100.26,224l-.78,0a15.82,15.82,0,0,1-14.41-11L32.8,52.92A15.95,15.95,0,0,1,52.92,32.8L213,85.07a16,16,0,0,1,1.41,29.8l-.33.13-50.16,19.27,56.57,56.56A12,12,0,0,1,220.49,207.8Z"></path></svg>

                <strong class="desc c-bg-secondary">Earn per Click</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Earning per Click amount</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input placeholder="E.g 200" value="0" type="number" step="any" name="earning_per_click" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
           <div class="w-full display-none house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M220.49,207.8,207.8,220.49a12,12,0,0,1-17,0l-56.57-56.57L115,214.08l-.13.33A15.84,15.84,0,0,1,100.26,224l-.78,0a15.82,15.82,0,0,1-14.41-11L32.8,52.92A15.95,15.95,0,0,1,52.92,32.8L213,85.07a16,16,0,0,1,1.41,29.8l-.33.13-50.16,19.27,56.57,56.56A12,12,0,0,1,220.49,207.8Z"></path></svg>

                <strong class="desc c-bg-secondary">Tiktok Minitizing</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Tiktok Minitizing earning amount</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input value="0" placeholder="E.g 1,000" type="number" step="any" name="tiktok_minitizing" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
            <div class="w-full display-none house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M192,32H64A32,32,0,0,0,32,64V192a32,32,0,0,0,32,32H192a32,32,0,0,0,32-32V64A32,32,0,0,0,192,32ZM92,176a12,12,0,1,1,12-12A12,12,0,0,1,92,176Zm0-72a12,12,0,1,1,12-12A12,12,0,0,1,92,104Zm36,36a12,12,0,1,1,12-12A12,12,0,0,1,128,140Zm36,36a12,12,0,1,1,12-12A12,12,0,0,1,164,176Zm0-72a12,12,0,1,1,12-12A12,12,0,0,1,164,104Z"></path></svg>
                <strong class="desc c-bg-secondary">Casino Game</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Casino game earning amount</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input value="0" placeholder="E.g 5000" type="number" step="any" name="casino_game" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
            <div class="w-full house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M152,160a24,24,0,1,1-24-24A24,24,0,0,1,152,160ZM208,40V216a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V40A16,16,0,0,1,64,24H192A16,16,0,0,1,208,40ZM116,68a12,12,0,1,0,12-12A12,12,0,0,0,116,68Zm52,92a40,40,0,1,0-40,40A40,40,0,0,0,168,160Z"></path></svg>
                 <strong class="desc c-bg-secondary">Daily Tasks</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Daily Tasks Earning amount</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input placeholder="E.g 400" type="number" value="{{ $package->daily_tasks }}" step="any" name="daily_tasks" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
              <div class="w-full house g-5 bg-secondary-light p-10 border-1 br-10 border-color-bg-secondary column">
            <div class="row w-full align-center space-between">
              <div class="row g-5 align-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z"></path></svg>
                 <strong class="desc c-bg-secondary">Spin & Win</strong>
              </div>
                <div class="toggle active"><div onclick="
               if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                this.closest('.house').querySelector('input.inp').classList.remove('input');
                 this.closest('.house').querySelector('input.inp').classList.remove('required');
                  this.closest('.house').querySelector('.cont').classList.add('display-none');
               }else{
                this.closest('.toggle').classList.add('active');
              this.closest('.house').querySelector('input.inp').classList.add('input');
                 this.closest('.house').querySelector('input.inp').classList.add('required');
                  this.closest('.house').querySelector('.cont').classList.remove('display-none');
               }
                " class="child"></div></div>
            </div>
            <span class="text-dim">Spin & Win Earning amount</span>
            
           <div class="w-full cont br-10 bg-white h-50 border-1 border-color-silver">
            <input placeholder="E.g 100" type="number" step="any" value="{{ $package->spin }}" name="spin" class="inp required input h-full w-full no-border bg-transparent br-10 border-color-transparent">
           </div>
           </div>
           <button class="post bg-secondary secondary-text m-top-20 w-full"><span>Save Changes</span></button>

        </form>
    </section>
@endsection
@section('js')
    <script class="js">
      window.MyFunc = {
        Added : function(response){
          let data=JSON.parse(response);
          // if(data.status == 'success'){
          //   window.location.reload();
          // }
        }
      }
    </script>
@endsection