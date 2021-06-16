<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\User;

class Fondo extends Component
{
    public $fondoweb;
    public function mount()
    {
        $this->fondoweb='';
    }
    public function render()
    {   
        $id=auth()->user()->id;
        $this->fondoweb=auth()->user()->darkmode;

        return view('livewire.fondo');
    }
    public function cambiofondo($id,$url)
    {
        // $user=User::find($id);
        // $user->update(['darkmode'=>$this->titulo,'body'=>$this->body]);
        // return $id;
        $datos=DB::table('users')->where('id',$id)->get();
        $fondo=$datos[0]->darkmode;
        if($fondo<>'' or $fondo<>null)
        {
            $sql="UPDATE users SET darkmode='' WHERE id=".$id;
            $this->fondoweb='';
        }
        else{
            $sql="UPDATE users SET darkmode='dark-mode' WHERE id=".$id;
            $this->fondoweb='dark-mode';
        }
        DB::update($sql);
        //return redirect('/');
        
       return redirect($url);
        
    }
}
