<form wire:submit.prevent="submit" class="needs-validation row justify-content-center py-lg-3 py-xl-4" >
    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
      <h2 class="h1 pb-lg-1 mb-4">Laissez-nous un message</h2>
      <p class="fs-lg text-muted pb-lg-1 mb-4">Avez-vous un projet en tête? Pour demander un devis, contactez-nous directement ou remplissez le formulaire et faites-nous savoir comment nous pouvons vous aider.</p>
      @if (session()->has('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
      @endif

      <div class="row">
        <div class="col-sm-6 mb-4">
          <label for="name" class="form-label fs-base">Nom complet</label>
          <input type="text" wire:model="name" id="name" class="form-control form-control-lg" >
          @error('name') <span class="text-danger text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-6 mb-4">
          <label for="email" class="form-label fs-base">Adresse e-mail</label>
          <input type="email" wire:model="email" id="email" class="form-control form-control-lg" >
          @error('email') <span class="text-danger text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-6 mb-4">
            <label  class="form-label fs-base">Sujet</label>
            <input type="text" wire:model="subject" class="form-control form-control-lg" >
            @error('subject') <span class="text-danger ">{{ $message }}</span> @enderror
          </div>
          <div class="col-sm-6 mb-4">
            <label  class="form-label fs-base">Numero de téléphone</label>
            <input type="text" wire:model="phone" class="form-control form-control-lg" >
            @error('phone') <span class="text-danger ">{{ $message }}</span> @enderror
          </div>
        <div class="col-12 mb-4">
          <label  class="form-label fs-base">Message</label>
          <textarea wire:model="message" class="form-control form-control-lg" rows="4" ></textarea>
          @error('message') <span class="text-danger ">{{ $message }}</span> @enderror
          
        </div>
      </div>
      {{-- <div class="form-check mb-4">
        <input type="checkbox" id="terms" class="form-check-input" required>
        <label for="terms" class="form-check-label fs-base">J'accepte les <a href="#">Termes &amp; Conditions</a></label>
      </div> --}}
      <button type="submit" class="btn btn-primary btn-lg shadow-primary">Envoyer le message</button>  
    </div>
  </form>
