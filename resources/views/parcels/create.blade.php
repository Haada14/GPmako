<div class="container">
       <div><p><a href="{{route('parcels.index')}}">{{__('Enregistrement d\'un colis')}}</a></p></div>
       <div class="container">
           <form action="{{route('parcels.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="weight" class="form-control" placeholder="le poids du colis">
               </div>
               <div>
                   <input type="text" name="place_departure" class="form-control" placeholder="Le lieu de depart">
               </div>
               <div>
                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
               </div>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
