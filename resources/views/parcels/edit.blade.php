<form action="{{route('parcels.update',['id'=>$parcel->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="weight" class="form-control" placeholder="le poids du colis" value="{{$parcels->weight}}"></div>
   <div><input type="text" name="place_departure" class="form-control" placeholder="Le lieu de depart" value="{{$parcels->place_departure}}"> </div>
   <div><textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$parcels->description}}</textarea> </div>
   <div><button class="btn btn-primary">Enregistrer</button> </div>
</form>
