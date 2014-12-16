<?php

use Illuminate\Database\Seeder;
use App\Items;

class ItemsTableSeeder extends Seeder {
    public function run() {
        // clear table
        DB::table('items')->delete();

        // Knoppers
        Items::create( [
            'name' => 'Knoppers' ,
            'price' => '35' ,
            'available' => true
        ]);

        // Leibniz Butterkeks
        Items::create( [
            'name' => 'Leibniz Butterkeks' ,
            'price' => '70' ,
            'available' => true
        ]);

        // Lion
        Items::create( [
            'name' => 'Lion' ,
            'price' => '60' ,
            'available' => true
        ]);

        // KitKat Chunky
        Items::create( [
            'name' => 'KitKat Chunky' ,
            'price' => '70' ,
            'available' => true
        ]);

        // M&M's alle Sorten
        Items::create( [
            'name' => 'M&M`s alle Sorten' ,
            'price' => '35' ,
            'available' => true
        ]);

        // Manner Neapol. Waffeln
        Items::create( [
            'name' => 'Manner Neapol. Waffeln' ,
            'price' => '100' ,
            'available' => true
        ]);

        // Maoam
        Items::create( [
            'name' => 'Maoam' ,
            'price' => '20' ,
            'available' => true
        ]);

        // Maoam - Kracher
        Items::create( [
            'name' => 'Maoam - Kracher' ,
            'price' => '75' ,
            'available' => true
        ]);

        // Mars (alle Sorten)
        Items::create( [
            'name' => 'Mars (alle Sorten)' ,
            'price' => '60' ,
            'available' => true
        ]);

        // Milky Way Doppelpack
        Items::create( [
            'name' => 'Milky Way Doppelpack' ,
            'price' => '70' ,
            'available' => true
        ]);

        // Mr. Tom
        Items::create( [
            'name' => 'Mr. Tom' ,
            'price' => '40' ,
            'available' => true
        ]);

        // MyMuesli2go
        Items::create( [
            'name' => 'MyMuesli2Go' ,
            'price' => '200' ,
            'available' => true
        ]);

        // Nestle Snack
        Items::create( [
            'name' => 'Nestle Snack' ,
            'price' => '50' ,
            'available' => true
        ]);

        // Nimm 2 Lolly
        Items::create( [
            'name' => 'Nimm 2 Lolly' ,
            'price' => '25' ,
            'available' => true
        ]);

        // Nuts
        Items::create( [
            'name' => 'Nuts' ,
            'price' => '60' ,
            'available' => true
        ]);

        // Pick up Choco
        Items::create( [
            'name' => 'Pick up Choco' ,
            'price' => '45' ,
            'available' => true
        ]);

        // Pringles
        Items::create( [
            'name' => 'Pringles' ,
            'price' => '90' ,
            'available' => true
        ]);

        // Snickers (alle Sorten)
        Items::create( [
            'name' => 'Snickers (alle Sorten)' ,
            'price' => '60' ,
            'available' => true
        ]);

        // Studetenfutter
        Items::create( [
            'name' => 'Studentenfutter' ,
            'price' => '70' ,
            'available' => true
        ]);

        // Twix (alle Sorten)
        Items::create( [
            'name' => 'Twix (alle Sorten)' ,
            'price' => '60' ,
            'available' => true
        ]);

        // YumYum Suppe
        Items::create( [
            'name' => 'YumYum Suppe' ,
            'price' => '50' ,
            'available' => true
        ]);

        // Zwiebelringe
        Items::create( [
            'name' => 'Zwiebelringe' ,
            'price' => '70' ,
            'available' => true
        ]);

    }
}