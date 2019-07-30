### Demostracion
Ejemplo de documentoreadme

### Controladores

### Controlador PersonController

    index()
        $personas = Person::all();
        return view([
            'person',
            'model' => $personas,
        ]);
    }

    public function show($id){
        $person = Person::find($id);
        return view([
            'person.show',
            'model' => $person,
        ]);
    }

