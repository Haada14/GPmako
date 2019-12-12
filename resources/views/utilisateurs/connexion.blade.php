
<div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
            <h2 class="text-center">Incription</h2>
            <form action="#"  method="post" class="bg-light p-5 contact-form">
              {{csrf_field() }}
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder=" Nom">
              </div>
              <div class="form-group">
                <input type="text" name="last_name"  class="form-control" placeholder=" Prenom">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder=" Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
              </div>
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer votre mot de passe">
                </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
</div>       