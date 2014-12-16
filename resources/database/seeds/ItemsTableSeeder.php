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
            'price' => '0.35' ,
            'image' => 'images/knoppers.jpg' ,
            'available' => true
        ]);

        // Leibniz Butterkeks
        Items::create( [
            'name' => 'Leibniz Butterkeks' ,
            'price' => '0.70' ,
            'image' => 'images/leibniz_butterkeks.jpg' ,
            'available' => true
        ]);

        // Lion
        Items::create( [
            'name' => 'Lion' ,
            'price' => '0.60' ,
            'image' => 'images/lion.jpg' ,
            'available' => true
        ]);

        // KitKat Chunky
        Items::create( [
            'name' => 'KitKat Chunky' ,
            'price' => '0.70' ,
            'image' => 'images/kitkat_chunky.jpg' ,
            'available' => true
        ]);

        // M&M's alle Sorten
        Items::create( [
            'name' => 'M&M`s alle Sorten' ,
            'price' => '0.35' ,
            'image' => 'images/mandms.jpg' ,
            'available' => true
        ]);

        // Manner Neapol. Waffeln
        Items::create( [
            'name' => 'Manner Naapolitaner  Waffeln' ,
            'price' => '1.00' ,
            'image' => 'images/neapolitaner_waffeln.jpg' ,
            'available' => true
        ]);

        // Maoam
        Items::create( [
            'name' => 'Maoam' ,
            'price' => '0.20' ,
            'image' => 'images/maoam.jpg' ,
            'available' => true
        ]);

        // Maoam - Kracher
        Items::create( [
            'name' => 'Maoam - Kracher' ,
            'price' => '0.75' ,
            'image' => 'images/maoam_kracher.jpg' ,
            'available' => true
        ]);

        // Mars (alle Sorten)
        Items::create( [
            'name' => 'Mars (alle Sorten)' ,
            'price' => '0.60' ,
            'image' => 'images/mars.jpg' ,
            'available' => true
        ]);

        // Milky Way Doppelpack
        Items::create( [
            'name' => 'Milky Way Doppelpack' ,
            'price' => '0.70' ,
            'image' => 'images/milky_way.jpg' ,
            'available' => true
        ]);

        // Mr. Tom
        Items::create( [
            'name' => 'Mr. Tom' ,
            'price' => '0.40' ,
            'image' => 'images/mr_tom.jpg' ,
            'available' => true
        ]);

        // MyMuesli2go
        Items::create( [
            'name' => 'MyMuesli2Go' ,
            'price' => '2.00' ,
            'image' => 'images/mymuesli2go.jpg' ,
            'available' => true
        ]);

        // Nestle Snack
        Items::create( [
            'name' => 'Nestle Snack' ,
            'price' => '0.50' ,
            'image' => 'images/nestlesnack.jpg' ,
            'available' => true
        ]);

        // Nimm 2 Lolly
        Items::create( [
            'name' => 'Nimm 2 Lolly' ,
            'price' => '0.25' ,
            'image' => 'images/nimm2lolly.jpg' ,
            'available' => true
        ]);

        // Nuts
        Items::create( [
            'name' => 'Nuts' ,
            'price' => '0.60' ,
            'image' => 'images/nuts.jpg' ,
            'available' => true
        ]);

        // Pick up Choco
        Items::create( [
            'name' => 'Pick up Choco' ,
            'price' => '0.45' ,
            'image' => 'images/pickupchoco.jpg' ,
            'available' => true
        ]);

        // Pringles
        Items::create( [
            'name' => 'Pringles' ,
            'price' => '0.90' ,
            'image' => 'images/pringles.jpg' ,
            'available' => true
        ]);

        // Snickers (alle Sorten)
        Items::create( [
            'name' => 'Snickers (alle Sorten)' ,
            'price' => '0.60' ,
            'image' => 'images/snickers.jpg' ,
            'available' => true
        ]);

        // Studetenfutter
        Items::create( [
            'name' => 'Studentenfutter' ,
            'price' => '0.70' ,
            'image' => 'images/studetenfutter.jpg' ,
            'available' => true
        ]);

        // Twix (alle Sorten)
        Items::create( [
            'name' => 'Twix (alle Sorten)' ,
            'price' => '0.60' ,
            'image' => 'images/twix.jpg' ,
            'available' => true
        ]);

        // YumYum Suppe
        Items::create( [
            'name' => 'YumYum Suppe' ,
            'price' => '0.50' ,
            'image' => 'images/yumyum_suppe.jpg' ,
            'available' => true
        ]);

        // Zwiebelringe
        Items::create( [
            'name' => 'Zwiebelringe' ,
            'price' => '0.70' ,
            'image' => 'images/zwiebelringe.jpg' ,
            'available' => true
        ]);

    }
}