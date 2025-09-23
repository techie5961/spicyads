@extends('layout.users.index')
@section('title')
    Terms of Service
@endsection
@section('main')
    <section class="column c-black w-full g-10 p-10">
        <section class="terms">
  <div class="card" style="max-width:900px; margin:auto; line-height:1.7;">
    <strong class="desc">Terms of Service</strong>
    <p>Welcome to <strong>{{ config('app.name') }}</strong>. By accessing or using our platform, you agree to follow the terms and conditions outlined below. Please read them carefully before using our services.</p>
    
    <h3>1. Acceptance of Terms</h3>
    <p>
      By registering on {{ config('app.name') }}, completing tasks, using the spin-and-win feature, or placing adverts, 
      you agree to comply with these Terms of Service, our Privacy Policy, and any other guidelines we provide.
    </p>
    
    <h3>2. Eligibility</h3>
    <p>
      You must be at least 16 years old to use {{ config('app.name') }}. By signing up, you confirm that the information you provide 
      is accurate and that you are responsible for maintaining the security of your account.
    </p>
    
    <h3>3. User Responsibilities</h3>
    <ul>
      <li>✔ Complete tasks honestly and without using bots, scripts, or fraudulent methods.</li>
      <li>✔ Do not create multiple accounts to exploit promotions or offers.</li>
      <li>✔ Ensure any adverts placed on {{ config('app.name') }} follow local laws and do not contain harmful or misleading content.</li>
      <li>✔ Treat other users with respect and avoid abusive behavior.</li>
    </ul>
    
    <h3>4. Earnings & Payments</h3>
    <p>
      Earnings from tasks, spins, or adverts will be credited to your account balance. 
      Payments are processed through our supported withdrawal methods and may be subject to verification.  
      {{ config('app.name') }} is not responsible for delays caused by third-party payment providers.
    </p>
    
    <h3>5. Advertiser Rules</h3>
    <p>
      Advertisers must ensure that all adverts are legal, ethical, and compliant with our advertising guidelines.  
      We reserve the right to reject or remove adverts that violate our policies without refund.
    </p>
    
    <h3>6. Prohibited Activities</h3>
    <p>Users may not engage in:</p>
    <ul>
      <li>Fraudulent activities, including fake task completions or spam adverts.</li>
      <li>Distributing malware, phishing links, or harmful content.</li>
      <li>Attempting to hack, exploit, or damage the platform.</li>
    </ul>
    
    <h3>7. Suspension & Termination</h3>
    <p>
      {{ config('app.name') }} reserves the right to suspend or permanently terminate any account found violating these terms.  
      Balances from fraudulent or abusive accounts will be forfeited.
    </p>
    
    <h3>8. Limitation of Liability</h3>
    <p>
      {{ config('app.name') }} is provided "as-is." While we strive to provide a smooth and secure experience, 
      we are not liable for losses caused by downtime, third-party providers, or misuse of the platform.
    </p>
    
    <h3>9. Changes to Terms</h3>
    <p>
      We may update these Terms of Service at any time. Continued use of {{ config('app.name') }} after updates 
      means you accept the revised terms.
    </p>
    
   
    
    
  </div>
</section>
    </section>
@endsection