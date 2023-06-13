<x-mail::message>
# Formulaire contact

Bonjour, 

-Nom complèt : {{ $request->name}} <br>
-Email : {{ $request->email}} <br>
-Objet : {{ $request->objet}} <br>
-message : {{ $request->message}} <br>


</x-mail::message>
