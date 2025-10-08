@isset($coupons)
      @foreach ($coupons as $data)
              <div class="bg-white w-full br-10 box-shadow p-10 column g-5">
                <div class="row w-full space-between g-10">
                    <div class="column g-2">
                        <strong class="font-1 row align-center g-2 c-green">{{ $data->code ?? '' }}
                        <svg onclick="copy('{{ $data->code ?? '' }}')" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>

                    </strong>
                    <span class="text-small row align-center g-2 text-dim">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>

                        Created {{ $data->frame ?? '' }}</span>
                    </div>
                    <div class="status {{ ($data->status ?? '') == 'active' ? 'gold' : 'green' }}">{{ $data->status ?? '' }}</div>

                </div>
                <hr>
                <div class="row w-full g-2 align-center">
                   <div class="row align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4caf50" viewBox="0 0 256 256"><path d="M92,140a12,12,0,1,1,12-12A12,12,0,0,1,92,140Zm72-24a12,12,0,1,0,12,12A12,12,0,0,0,164,116Zm-12.27,45.23a45,45,0,0,1-47.46,0,8,8,0,0,0-8.54,13.54,61,61,0,0,0,64.54,0,8,8,0,0,0-8.54-13.54ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88.11,88.11,0,0,0-84.09-87.91C120.32,56.38,120,71.88,120,72a8,8,0,0,0,16,0,8,8,0,0,1,16,0,24,24,0,0,1-48,0c0-.73.13-14.3,8.46-30.63A88,88,0,1,0,216,128Z"></path></svg>
                   <span>Vendor:</span> 
                   <a class="no-u c-green bold" {{ ($data->vendor_id ?? '') == 0 ? 'href="'.url('admins/user?id='.$data->id.'').'"' : '' }}>{{ $data->vendor->username ?? 'Non vendor' }}</a>
                   </div>
                </div>
                 <div class="row w-full g-2 align-center">
                   <div class="row align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4caf50" viewBox="0 0 256 256"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64ZM96,56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM224,80v32H192v-8a8,8,0,0,0-16,0v8H80v-8a8,8,0,0,0-16,0v8H32V80Zm0,112H32V128H64v8a8,8,0,0,0,16,0v-8h96v8a8,8,0,0,0,16,0v-8h32v64Z"></path></svg>
                       <span>Package:</span> 
                   <strong>{{ $data->package->name ?? '' }}</strong>
                   </div>
                </div>
              
                <button onclick="
                let data=`
                <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' viewBox='0 0 256 256'><path d='M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z'></path></svg>

                Are you sure you want to trash this code? this action cannot be undone.
                  <button onclick='window.location.href=&quot;{{ url('admins/get/coupon/delete?id='.$data->id.'') }}&quot;' class='btn-red-3d m-top-10 w-full clip-5 br-'>Yes! Trash Code</button>
                `;
                PopUp(data)" class="btn-red-3d m-left-auto br-5 clip-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z"></path></svg>

                    Trash</button>
              </div>
          @endforeach  
         @if ($coupons->hasMorePages())
             @include('components.sections',[
              'infinite_loading' => true,
              'page' => $coupons->currentPage() + 1
             ])
         @endif
@endisset
@isset($tasks)
      @foreach ($tasks as $data)
              <div class="w-full bg-white br-10 box-shadow p-10 column g-10">
                <div class="row w-full space-between g-10">
                    @switch(str_contains(strtolower($data->category),'whatsapp') ? 'whatsapp' : (str_contains(strtolower($data->category),'telegram') ? 'telegram' : 'others'))
                        @case('whatsapp')
                            <svg class="min-w-10" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4caf50" viewBox="0 0 256 256"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>

                            @break
                        @case('telegram')
                            <svg class="min-w-32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="navy" viewBox="0 0 256 256"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

                            @break
                        @default
                            <svg class="min-w-10" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>

                    @endswitch
                    <div class="column m-right-auto g-5">
                        <strong class="font-1">{{ $data->title ?? 'null' }}</strong>
                        <span class="text-dim row align-center g-2 text-small">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>

                            Last Updated {{ $data->frame }}</span>
                    </div>
                    <div class="status {{ $data->status == 'active' ? 'green' : 'gold' }}">{{ $data->status }}</div>
                </div>
                <hr>
                <div class="row align-center g-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M207.58,63.84C186.85,53.48,159.33,48,128,48S69.15,53.48,48.42,63.84,16,88.78,16,104v48c0,15.22,11.82,29.85,32.42,40.16S96.67,208,128,208s58.85-5.48,79.58-15.84S240,167.22,240,152V104C240,88.78,228.18,74.15,207.58,63.84ZM128,64c62.64,0,96,23.23,96,40s-33.36,40-96,40-96-23.23-96-40S65.36,64,128,64Zm-8,95.86v32c-19-.62-35-3.42-48-7.49V153.05A203.43,203.43,0,0,0,120,159.86Zm16,0a203.43,203.43,0,0,0,48-6.81v31.31c-13,4.07-29,6.87-48,7.49ZM32,152V133.53a82.88,82.88,0,0,0,16.42,10.63c2.43,1.21,5,2.35,7.58,3.43V178C40.17,170.16,32,160.29,32,152Zm168,26V147.59c2.61-1.08,5.15-2.22,7.58-3.43A82.88,82.88,0,0,0,224,133.53V152C224,160.29,215.83,170.16,200,178Z"></path></svg>
                    <span>Task Reward:</span>
                    <strong class="font-1 c-green">&#8358;{{ number_format($data->reward,2) }}</strong>
                </div>
                <div class="row align-center g-5">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M76,152a36,36,0,1,0,36,36A36,36,0,0,0,76,152Zm0,56a20,20,0,1,1,20-20A20,20,0,0,1,76,208ZM42.34,106.34,56.69,92,42.34,77.66A8,8,0,0,1,53.66,66.34L68,80.69,82.34,66.34A8,8,0,0,1,93.66,77.66L79.31,92l14.35,14.34a8,8,0,0,1-11.32,11.32L68,103.31,53.66,117.66a8,8,0,0,1-11.32-11.32Zm187.32,96a8,8,0,0,1-11.32,11.32L204,199.31l-14.34,14.35a8,8,0,0,1-11.32-11.32L192.69,188l-14.35-14.34a8,8,0,0,1,11.32-11.32L204,176.69l14.34-14.35a8,8,0,0,1,11.32,11.32L215.31,188Zm-45.19-89.51c-6.18,22.33-25.32,41.63-46.53,46.93A8.13,8.13,0,0,1,136,160a8,8,0,0,1-1.93-15.76c15.63-3.91,30.35-18.91,35-35.68,3.19-11.5,3.22-29-14.71-46.9L152,59.31V80a8,8,0,0,1-16,0V40a8,8,0,0,1,8-8h40a8,8,0,0,1,0,16H163.31l2.35,2.34C183.9,68.59,190.58,90.78,184.47,112.83Z"></path></svg>
                     <span>Completed:</span>
                    <strong class="font-1 c-green">{{ number_format($data->completed).'/'.number_format($data->limit) }}</strong>
                </div>
                <div class="row align-center g-5">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M240,88.23a54.43,54.43,0,0,1-16,37L189.25,160a54.27,54.27,0,0,1-38.63,16h-.05A54.63,54.63,0,0,1,96,119.84a8,8,0,0,1,16,.45A38.62,38.62,0,0,0,150.58,160h0a38.39,38.39,0,0,0,27.31-11.31l34.75-34.75a38.63,38.63,0,0,0-54.63-54.63l-11,11A8,8,0,0,1,135.7,59l11-11A54.65,54.65,0,0,1,224,48,54.86,54.86,0,0,1,240,88.23ZM109,185.66l-11,11A38.41,38.41,0,0,1,70.6,208h0a38.63,38.63,0,0,1-27.29-65.94L78,107.31A38.63,38.63,0,0,1,144,135.71a8,8,0,0,0,16,.45A54.86,54.86,0,0,0,144,96a54.65,54.65,0,0,0-77.27,0L32,130.75A54.62,54.62,0,0,0,70.56,224h0a54.28,54.28,0,0,0,38.64-16l11-11A8,8,0,0,0,109,185.66Z"></path></svg>
                     <span>Task Link:</span>
                    <a href="{{ $data->link }}" target="_blank" class="font-1 bold c-green">Visit Link</a>
                </div>
                
                <div class="row align-center g-10 space-between">
                    <button onclick="
                        let data=`
                       <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' viewBox='0 0 256 256'><path d='M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z'></path></svg> 
                        <span>Are you sure you want to delete this task? This action cannot be undone.</span>
                    <button onclick='window.location.href=&quot;{{ url('admins/get/task/delete?id='.$data->id.'') }}&quot;' class='btn-red-3d w-full clip-5 g-5 br-5'>Yes! Delete Task</button>
                        `;
                        PopUp(data);
                        " class="btn-red-3d g-5 clip-5 br-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg>

                        Delete</button>
                     <button onclick="window.location.href='{{ url('admins/task/edit?id='.$data->id.'') }}'" class="btn-blue-3d g-5 clip-5 br-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M201.54,54.46A104,104,0,0,0,54.46,201.54,104,104,0,0,0,201.54,54.46ZM88,192a16,16,0,0,1,32,0v23.59a88,88,0,0,1-32-9.22Zm48,0a16,16,0,0,1,32,0v14.37a88,88,0,0,1-32,9.22Zm-28.73-56h41.46l11.58,25.1A31.93,31.93,0,0,0,128,170.87a31.93,31.93,0,0,0-32.31-9.77Zm7.39-16L128,91.09,141.34,120Zm75.56,70.23c-2,2-4.08,3.87-6.22,5.64V176a7.91,7.91,0,0,0-.74-3.35l-48-104a8,8,0,0,0-14.52,0l-48,104A7.91,7.91,0,0,0,72,176v19.87c-2.14-1.77-4.22-3.64-6.22-5.64a88,88,0,1,1,124.44,0Z"></path></svg>

                        Edit</button>
                </div>
              </div>
          @endforeach
          @if ($tasks->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $tasks->currentPage() + 1
              ])
          @endif
@endisset
@isset($transactions)
     @foreach ($transactions as $data)
          <div class="w-full bg-white column  p-10 br-10 box-shadow">
            <div class="row w-full g-10 space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-50 w-50 clip-circle circle">
            <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
                <div class="row text-average text-dim align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                    {{ $data->user->email }}
                </div>
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Submitted
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
            </div>
            <hr>
            <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="rgba(108,92,230)" viewBox="0 0 256 256"><path d="M239.76,158.06,217.28,68.12A16,16,0,0,0,201.75,56H136V40a16,16,0,0,0-16-16H80A16,16,0,0,0,64,40V56H54.25A16,16,0,0,0,38.72,68.12L16.24,158.06A7.93,7.93,0,0,0,16,160v32a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V160A7.93,7.93,0,0,0,239.76,158.06ZM80,40h40V56H80ZM54.25,72h147.5l20,80H34.25ZM32,192V168H224v24ZM64,96a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,96ZM64,128a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,128Z"></path></svg>

                        Transaction Type
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->type }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orangered  " viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V96H40V56ZM40,112H96v88H40Zm176,88H112V112H216v88Z"></path></svg>

                        Transaction Class
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->class }}</strong>
                </div>
            </div>
            @if (str_contains(strtolower($data->type),'withdrawal'))
                 <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="blue" viewBox="0 0 256 256"><path d="M224,88H175.4l8.47-46.57a8,8,0,0,0-15.74-2.86l-9,49.43H111.4l8.47-46.57a8,8,0,0,0-15.74-2.86L95.14,88H48a8,8,0,0,0,0,16H92.23L83.5,152H32a8,8,0,0,0,0,16H80.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,80,224a8,8,0,0,0,7.86-6.57l9-49.43H144.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,144,224a8,8,0,0,0,7.86-6.57l9-49.43H208a8,8,0,0,0,0-16H163.77l8.73-48H224a8,8,0,0,0,0-16Zm-76.5,64H99.77l8.73-48h47.73Z"></path></svg>
                     
                        Account Number
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_number }} <svg onclick="copy('{{ $data->json->data->bank->account_number }}')" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>
                    </strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Name
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Account Holder Name
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orange" viewBox="0 0 256 256"><path d="M224,64H32A16,16,0,0,0,16,80v72a16,16,0,0,0,16,16H56v32a8,8,0,0,0,16,0V168H184v32a8,8,0,0,0,16,0V168h24a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64Zm0,64.69L175.31,80H224ZM80.69,80l72,72H103.31L32,80.69V80ZM32,103.31,80.69,152H32ZM224,152H175.31l-72-72h49.38L224,151.32V152Z"></path></svg>

                      Gateway
                    </div>
                    <strong class="font-1 m-left-auto">Local Bank</strong>
                </div>
                
            </div>
            @endif
              @if (str_contains(strtolower($data->type),'deposit') && $data->gateway == 'manual')
                 <div class="row m-top-10 w-full g-10 space-between">
               
                 <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Sent From
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Name on Account
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
            </div>
            
            @endif
            <div class="row w-full m-top-10 align-center space-between">
              <strong class="desc m-left-auto c-green">&#8358;{{ number_format($data->amount,2) }}</strong>
            </div>
           
           @if ($data->status == 'pending')
           
               <hr> 
               
               <div class="row w-full g-10 align-center space-between">
                <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be creditted the sum of <strong class='desc c-green'>&#8358;{{ number_format($data->amount,2) }}</strong> into his/her deposit wallet</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her withdrawal has been approved so it is advisable to send the funds before confirming else reject this withdrawal.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-green-3d c-white clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                  Approve
                </button>
                 <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to reject this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her deposit has been rejected.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be refunded back the sum of <strong class='desc c-green'>&#8358;{{ number_format($data->amount,2) }}</strong> into his/her {{ ucfirst(str_replace('_balance','',$data->json->wallet)) }} Wallet.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-red-3d clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>

                  Reject
                </button>
               </div>
           @endif
          </div>
      @endforeach
          @if ($transactions->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $transactions->currentPage() + 1
              ])
          @endif
@endisset
@isset($users)
     @foreach ($users as $data)
             <div class="column w-full g-10 p-10 br-10 bg-white box-shadow">
                <div class="row w-full g-10 space-between">
                    <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-50 w-50 circle clip-circle">
                <div class="column g-2 m-right-auto">
                    <strong onclick="window.location.href='{{ url('admins/user?id='.$data->id.'') }}'" class="font-1 no-select pointer c-green u">{{ $data->username }}</strong>
                <span class="row text-dim text-average g-2 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path></svg>

                    {{ $data->email }}</span>
                     <span class="row text-dim text-average g-2 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#000000" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                        Registered 
                    {{ $data->frame }}</span>
                </div>
                <div class="status {{ $data->status == 'active' ? 'green' : 'red' }}">{{ $data->status }}</div>
                </div>
                <hr>
                <div class="grid w-full g-10 place-center grid-2">
                    <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Activities Balance</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->activities_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Affiliate Balance</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->affiliate_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Deposit Balance</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->deposit_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Last Deposit</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->last_deposit,2) }}</strong>
                    </div>
                </div>
                <div class="row align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M200,112a8,8,0,0,1-8,8H152a8,8,0,0,1,0-16h40A8,8,0,0,1,200,112Zm-8,24H152a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm40-80V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM216,200V56H40V200H216Zm-80.26-34a8,8,0,1,1-15.5,4c-2.63-10.26-13.06-18-24.25-18s-21.61,7.74-24.25,18a8,8,0,1,1-15.5-4,39.84,39.84,0,0,1,17.19-23.34,32,32,0,1,1,45.12,0A39.76,39.76,0,0,1,135.75,166ZM96,136a16,16,0,1,0-16-16A16,16,0,0,0,96,136Z"></path></svg>
                    <span>Full Name:</span>
                    <strong class="font-1 c-green">{{ $data->name }}</strong>
                </div>
                <div class="row align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M253.66,90.34l-40-40a8,8,0,0,0-11.32,0L168,84.69,133.66,50.34a8,8,0,0,0-11.32,0L88,84.69,53.66,50.34a8,8,0,0,0-11.32,0l-40,40a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0L88,107.31,116.69,136,82.34,170.34a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0,0-11.32L139.31,136,168,107.31l34.34,34.35a8,8,0,0,0,11.32,0l40-40A8,8,0,0,0,253.66,90.34ZM48,124.69,19.31,96,48,67.31,76.69,96Zm80,80L99.31,176,128,147.31,156.69,176Zm0-80L99.31,96,128,67.31,156.69,96Zm80,0L179.31,96,208,67.31,236.69,96Z"></path></svg>
                    <span>Uniqid/User ID:</span>
                    <strong class="font-1 c-green">{{ $data->uniqid }}</strong>
                </div>
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16Zm8,200a8,8,0,0,1-8,8H80a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96a8,8,0,0,1,8,8ZM140,60a12,12,0,1,1-12-12A12,12,0,0,1,140,60Z"></path></svg>
                    <span>Phone Number:</span>
                    <strong class="font-1 c-green">{{ $data->phone }}</strong>
                </div>
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm0,128H56a8,8,0,0,1-8-8V78.63A23.84,23.84,0,0,0,56,80H216Zm-48-60a12,12,0,1,1,12,12A12,12,0,0,1,168,132Z"></path></svg>
                     <span>Total Withdrawn:</span>
                    <strong class="font-1 c-green">&#8358;{{ number_format($data->total_withdrawn,2) }}</strong>
                </div>
                 <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg>
                     <span>Package:</span>
                    <strong class="font-1 c-green">{{ $data->package->name }}</strong>
                </div>
              
                  <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                     <span>Referred By:</span>
                    <strong {!! ($data->ref ?? '') == '' ? '' : 'onclick="window.location.href=&quot;'.url('admins/user?id='.($data->ref_id ?? '').'').'&quot;"' !!} class="font-1 c-green no-select {{ $data->ref == '' ? '' : 'u pointer' }}">{{ $data->ref == '' ? 'None' : $data->ref }}</strong>
                </div>
                  <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                     <span>Total Downlines:</span>
                    <strong class="font-1 c-green">{{ number_format($data->total_downlines) }}</strong>
                </div>
                <button onclick="window.location.href='{{ url('admins/user?id='.$data->id.'') }}'" class="btn-green-3d c-white m-left-auto clip-5 br-5">View More....</button>
                
             </div>
         @endforeach 
         @if ($users->hasMorePages())
             @include('components.sections',[
                'infinite_loading' => true,
                'page' => $users->currentPage() + 1

             ])
         @endif
@endisset
@isset($task_proofs)
    @foreach ($proofs as $data)
              <div class="w-full box--shadow br-10 p-10 bg-white column g-10">
                <div class="row w-full g-10 space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-50 w-50 clip-circle circle">
            <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
               
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Submitted
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
            </div>
            <hr>
            <div class="row g-5 align-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M253.66,90.34l-40-40a8,8,0,0,0-11.32,0L168,84.69,133.66,50.34a8,8,0,0,0-11.32,0L88,84.69,53.66,50.34a8,8,0,0,0-11.32,0l-40,40a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0L88,107.31,116.69,136,82.34,170.34a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0,0-11.32L139.31,136,168,107.31l34.34,34.35a8,8,0,0,0,11.32,0l40-40A8,8,0,0,0,253.66,90.34ZM48,124.69,19.31,96,48,67.31,76.69,96Zm80,80L99.31,176,128,147.31,156.69,176Zm0-80L99.31,96,128,67.31,156.69,96Zm80,0L179.31,96,208,67.31,236.69,96Z"></path></svg>
                <span>Task ID:</span>
                <strong class="font-1 c-green">{{ $data->json->id }}</strong>
            </div>
            <div class="row g-5 align-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,16V161.57l-51.77-32.35a8,8,0,0,0-8.48,0L72,161.56V48ZM132.23,177.22a8,8,0,0,0-8.48,0L72,209.57V180.43l56-35,56,35v29.14Z"></path></svg>
                <span>Task Title:</span>
                <strong class="font-1 c-green">{{ $data->json->title }}</strong>
            </div>
            <div class="row g-5 align-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M240,88.23a54.43,54.43,0,0,1-16,37L189.25,160a54.27,54.27,0,0,1-38.63,16h-.05A54.63,54.63,0,0,1,96,119.84a8,8,0,0,1,16,.45A38.62,38.62,0,0,0,150.58,160h0a38.39,38.39,0,0,0,27.31-11.31l34.75-34.75a38.63,38.63,0,0,0-54.63-54.63l-11,11A8,8,0,0,1,135.7,59l11-11A54.65,54.65,0,0,1,224,48,54.86,54.86,0,0,1,240,88.23ZM109,185.66l-11,11A38.41,38.41,0,0,1,70.6,208h0a38.63,38.63,0,0,1-27.29-65.94L78,107.31A38.63,38.63,0,0,1,144,135.71a8,8,0,0,0,16,.45A54.86,54.86,0,0,0,144,96a54.65,54.65,0,0,0-77.27,0L32,130.75A54.62,54.62,0,0,0,70.56,224h0a54.28,54.28,0,0,0,38.64-16l11-11A8,8,0,0,0,109,185.66Z"></path></svg>
                <span>Task Link:</span>
                <strong class="font-1 c-green"><a target="_blank" href="{{ $data->json->link }}" class="c-inherit">Visit Link</a></strong>
            </div>
            <div class="row g-5 align-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M207.58,63.84C186.85,53.48,159.33,48,128,48S69.15,53.48,48.42,63.84,16,88.78,16,104v48c0,15.22,11.82,29.85,32.42,40.16S96.67,208,128,208s58.85-5.48,79.58-15.84S240,167.22,240,152V104C240,88.78,228.18,74.15,207.58,63.84ZM128,64c62.64,0,96,23.23,96,40s-33.36,40-96,40-96-23.23-96-40S65.36,64,128,64Zm-8,95.86v32c-19-.62-35-3.42-48-7.49V153.05A203.43,203.43,0,0,0,120,159.86Zm16,0a203.43,203.43,0,0,0,48-6.81v31.31c-13,4.07-29,6.87-48,7.49ZM32,152V133.53a82.88,82.88,0,0,0,16.42,10.63c2.43,1.21,5,2.35,7.58,3.43V178C40.17,170.16,32,160.29,32,152Zm168,26V147.59c2.61-1.08,5.15-2.22,7.58-3.43A82.88,82.88,0,0,0,224,133.53V152C224,160.29,215.83,170.16,200,178Z"></path></svg>
                 <span>Task Earning:</span>
                <strong class="font-1 c-green">&#8358;{{ number_format($data->json->reward,2) }}</strong>
            </div>

              </div>
          @endforeach
          @if ($proofs->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $proofs->currentPage() + 1
              ])
          @endif
@endisset
@isset($logs)
      @foreach ($logs as $data)
                <div class="w-full br-10 bg-white box-shadow p-10 column g-10">
                    <div class="row g-10 space-between">
                        <img class="h-50 w-50 circle clip-circle" src="{{ asset('users/'.$data->user->photo.'') }}" alt="">
                        <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
                <div class="row text-average text-dim align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                    {{ $data->user->email }}
                </div>
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Logged
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
           
                    </div>
                    <hr>
                    <div class="row align-center g-5 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M232,112H136V88h8a16,16,0,0,0,16-16V40a16,16,0,0,0-16-16H112A16,16,0,0,0,96,40V72a16,16,0,0,0,16,16h8v24H24a8,8,0,0,0,0,16H56v32H48a16,16,0,0,0-16,16v32a16,16,0,0,0,16,16H80a16,16,0,0,0,16-16V176a16,16,0,0,0-16-16H72V128H184v32h-8a16,16,0,0,0-16,16v32a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V176a16,16,0,0,0-16-16h-8V128h32a8,8,0,0,0,0-16ZM112,40h32V72H112ZM80,208H48V176H80Zm128,0H176V176h32Z"></path></svg>

                        <span>IP Address:</span>
                        <strong class="desc c-green">{{ $data->ip }}</strong>
                    </div>
                </div>
            @endforeach
            @if ($logs->hasMorePages())
                @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $logs->currentPage() + 1
                ])
            @endif
@endisset
@isset($notifications)
     @foreach ($notifications as $data)
                <div class="w-full br-10 bg-white box-shadow p-10 column g-10">
                    <div class="row g-10 align-center space-between">
                      <div class="h-50 circle w-50 bg-green column justify-center c-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 256 256"><path d="M16,176a8,8,0,0,1,8-8h8V152a96.12,96.12,0,0,1,88-95.66V40H104a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16H136V56.34A96.12,96.12,0,0,1,224,152v16h8a8,8,0,0,1,0,16H24A8,8,0,0,1,16,176Zm216,24H24a8,8,0,0,0,0,16H232a8,8,0,0,0,0-16Z"></path></svg>

                      </div>
                        <div class="column g-2 m-right-auto">
               
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                   
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'read' ? 'green' : 'gold' }}">{{ $data->status }}</div>
           
                    </div>
                    <hr>
                    <div class="w-full">
                        {!! $data->message !!}
                    </div>
                   @if ($data->status == 'unread')
                        <button onclick="window.location.href='{{ url('admins/notification/mark/as/read?id='.$data->id.'') }}'" class="btn-green-3d m-left-auto clip-5 br-5 c-white">Mark As Read</button>
                   @endif
                </div>
            @endforeach
            @if ($notifications->hasMorePages())
                @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $notifications->currentPage() + 1
                ])
            @endif
@endisset