<?php

namespace App\Observers;

use App\Models\Language;
use App\Models\Translation;
use App\Models\TranslationKey;

class TranslationKeyObserver
{
    public function created(TranslationKey $translationKey)
    {
        // Varsayılan dil (İngilizce) için değerleri al
        $defaultValue = [
            
            'companies' => 'Firmen',
            'company' => 'Unternehmen',
            'company_add' => 'Unternehmen erstellen',
            'company_edit' => 'Unternehmen Bearbeiten',
            'company_name' => 'Firmenname',
            'company_email' => 'Unternehmen email',
            'company_phone' => 'Firmen Telefon',
            'company_fax' => 'Faks',
            'company_hrb' => 'HRB',
            'company_iban' => 'Iban',
            'company_stnr' => 'StNr',
            'company_ust_id_nr' => 'Ust. Id. Nr.',
            'company_registry_court' => 'Registry Court',
            'company_general_manager' => 'Geschäftsführer',
            'languages' => 'Sprachen',
            'language' => 'Sprache',
            'language_code' => 'Sprache Code',
            'language_logo' => 'Sprache Logo',
            'language_add' => 'Sprache Erstellen',
            'language_edit' => 'Sprache Bearbeiten',
            'keys' => 'Wörter',
            'users' => 'Benutzer',
            'user_add' => 'Benutzer erstellen',
            'user_edit' => 'Benutzer Bearbeiten',
            'name_surname' => 'Benutzer erstellen',
            'user_type' => 'Benutzer erstellen',
            'cars' => 'Fahrzeuge',
            'car' => 'Fahrzeuge',
            'car_groups' => 'Fahrzeuggruppen',
            'car_group' => 'Fahrzeuggruppen',
            'car_add' => 'Werkzeug hinzufügen',
            'car_group_add' => 'Werkzeuggruppe hinzufügen',
            'kilometer_packages' => 'Kilometerpakete',
            'insurance_packages' => 'Versicherungspakete',
            'add_another_kilometer_packages' => 'Weiteres Kilometerpaket hinzufügen',
            'add_another_insurance_packages' => 'Weiteres Versicherungspaket hinzufügen',
            'punishments' => 'Strafen',
            'punishment_add' => 'Strafe Hinzufügen',
            'main_menu' => 'Hauptmenü',
            'home' => 'Startseite',
            'dashboard' => 'Dashboard',
            'calender' => 'Startseite',
            'roles' => 'Rollen',
            'role_add' => 'Rolle Hinzufügen',
            'role_edit' => 'Rolle Bearbeiten',
            'settings' => 'Einstellungen',
            'customers' => 'Kunden',
            'customer_add' => 'Kunden erstellen',
            'contracts' => 'Verträge',
            'contract' => 'Vertrag',
            'add_contract' => 'Vertrag erstellen',
            'invoices' => 'Rechnungen',
            'invoice' => 'Rechnung',
            'invoice_add' => 'Rechnungen erstellen',
            'invoice_show' => 'Rechnung Anzeigen',
            'sign' => 'Zeichen',
            'resend_the_contract' => 'Senden Sie den Vertrag erneut',
            'created_at' => 'Erstellungsdatum',
            'profile' => 'Profil',
            'fast_access' => 'Schneller Zugriff',
            'status' => 'Status',
            'detail' => 'Details',
            'active' => 'Aktiv',
            'inactive' => 'Inaktiv',
            'approved' => 'Bestätigen',
            'approve' => 'Bestätigen',
            'not_approved' => 'Nicht Genehmigt',
            'edit' => 'Bearbeiten',
            'duplicate' => 'Duplikat',
            'delete' => 'Löschen',
            'create' => 'Erstellen',
            'name' => 'Name',
            'surname' => 'Surname',
            'permissions' => 'Berechtigungen',
            'street' => 'Straße',
            'zip_code' => 'Postleitzahl',
            'city' => 'Stadt',
            'country' => 'Land',
            'phone' => 'Telefon',
            'password' => 'Passwort',
            'password_confirm' => 'Passwort wiederholen',
            'password_current' => 'Aktuelles Passwort',
            'email' => 'E-Mail',
            'not_selected' => 'Nicht Ausgewählt',
            'was_delivered' => 'Wurde geliefert',
            'delivered' => 'Geliefert',
            'not_signed' => 'Nicht Signiert',
            'not_delivered' => 'Nicht Zugestellt',
            'cancelled' => 'Abgesagt',
            'show_all' => 'Alle Anzeigen',
            'today' => 'Heute',
            'come_back' => 'Komm zurück',
            'statistics' => 'Statistiken',
            'analysis' => 'Analyse',
            'yearly' => 'Jährlich',
            'monthly' => 'Monatlich',
            'weekly' => 'Wöchentlich',
            'available_vehicles' => 'Verfügbare Fahrzeuge',
            'mails' => 'E-Mails',
            'mail' => 'Mail',
            'handover' => 'Aushändigen',
            'pickup' => 'Abholen',
            'info' => 'info',
            'address' => 'Adresse',
            'security' => 'Sicherheit',
            'signature' => 'Unterschrift',
            'save_and_close' => 'Speichern und Schließen',
            'save_and_complete' => 'Speichern und Vervollständigen',
            'clear' => 'Slar',
            'completed' => 'Vollendet',
            'close' => 'Schließen',
            'digital_signature' => 'Digitale Kundenunterschrift',
            'signature_please_message1' => 'Klicken Sie hier, um das Signaturboard (im Popup) zu öffnen.',
            'signature_please_message2' => 'Nach der Unterzeichnung wird die Signatur hier angezeigt.',
            'vehicle' => 'Fahrzeug',
            'gray' => 'Grau',
            'green' => 'Grün',
            'red' => 'Rot',
            'blue' => 'Blau',
            'orange' => 'Orange',
            'draft' => 'Entwurf',
            'cancelled_message' => 'Rote, stornierte und abgelaufene Verträge sowie abgeschlossene Verträge',
            'received' => 'Erhalten',
            'and' => 'und',
            'events' => 'Veranstaltungen',
            'calender_message' => 'Es sind heute keine Verträge abzuholen oder auszuliefern.',
            'starting_and_ending' => 'Beginn und Ende heute',
            'age' => 'Alter',
            'all_group' => 'Alle Gruppen',
            'data_could_not_be_retrieved' => 'Daten konnten nicht abgerufen werden.',
            'general_information' => 'Allgemeine Informationen',
            'reports' => 'Reports',
            'images' => 'Allgemeine Informationen',
            'odometer' => 'Kilometerzähler',
            'group' => 'Gruppe',
            'price_per_extra_kilometer' => 'Preis pro Extrakilometer',
            'standart_insurance' => 'Vollkasko mit SB',
            'car_add_error' => 'Bitte füllen Sie alle erforderlichen Felder aus.',
            'daily_price' => 'Tagespreis',
            'daily_kilometer' => 'Tägliche Kilometer',
            'weekly_price' => 'Wochenpreis',
            'weekly_kilometer' => 'Wöchentliche Kilometer',
            'weekday_price' => 'Wochentagspreis',
            'weekday_kilometer' => 'Wochentagskilometer',
            'monthly_price' => 'Monatspreis',
            'monthly_kilometer' => 'Monatliche Kilometer',
            'weekend_price' => 'Wochenendpreis',
            'weekend_kilometer' => 'Wochenendkilometer',
            'next' => 'Nächster',
            'previous' => 'Vorheriger',
            'brand' => 'Marke',
            'model' => 'Modell',
            'class' => 'Klasse',
            'number_of_doors' => 'Anzahl der Türen',
            'horse_power' => 'PS (Pferdestärke)',
            'fuel' => 'Kraftstoff',
            'fuel_level' => 'Kraftstoffstand',
            'color' => 'Farbe',
            'vin' => 'Fahrzeug-Identifizierungsnummer',
            'min_age' => 'Mindestalter',
            'tire_type' => 'Reifenart',
            'summary' => 'Zusammenfassung',
            'winter' => 'Winter',
            'long_way' => 'Lange Strecke',
            'opening_date_to_traffic' => 'Verkehrszulassungsdatum',
            'tire_size' => 'Reifengröße',
            'rim_size' => 'Felgengröße',
            'key_number' => 'Schlüsselnummer',
            'number_plate' => 'Kennzeichen',
            'description' => 'Beschreibung',
            'damage_add' => 'Schaden hinzufügen',
            'damage' => 'Schaden',
            'remove_last' => 'Letzten entfernen',
            'internal_damages' => 'Interne Schäden',
            'damages' => 'Schäden',
            'options' => 'Optionen',
            'main_photo' => 'Hauptfoto',
            'add_another_images' => 'Weitere Bilder hinzufügen',
            'kilometers' => 'Kilometer',
            'prices' => 'Preise',
            'kilometer' => 'Kilometer',
            'price' => 'Preis',
            'deductible' => 'Selbstbeteiligung',
            'price_per_day' => 'Preis pro Tag',
            'photo' => 'Foto',
            'day' => 'Tag',
            'extra' => 'Extra',
            'yes' => 'Ja',
            'no' => 'Nein',
            'triangle_reflector' => 'Gibt es einen Dreiecksreflektor?',
            'reflective_vest' => 'Gibt es eine reflektierende Weste?',
            'first_aid_kit' => 'Gibt es ein Erste-Hilfe-Set?',
            'it_clean' => 'Ist es sauber?',
            'vehicle_tire_profile' => 'Fahrzeugreifenprofil',
            'extra_kilometer_price' => 'Mehrkilometerpreis',
            'extra_kilometer_package' => 'Zusatzkilometer Pakete',
            'extra_insurance_package' => 'Zusätzliches Versicherungspaket',
            'selected_package' => 'Ausgewähltes Paket',
            'enter_yourself' => 'treten Sie selbst ein',
            'available' => 'Verfügbar',
            'rented' => 'Gemietet',
            'reserved' => 'Reserviert',
            'search' => 'Suchen',
            'rentals' => 'Mieten',
            'until' => 'Bis',
            'sort_by' => 'Sortieren Nach',
            'total_cars_text' => 'Gesamtzahl der tatsächlich verfügbaren Autos',
            'payment' => 'Zahlung',
            'confirmation' => 'Bestätigung',
            'backto' => 'zurück zu',
            'continueto' => 'weiter zu',
            'cash' => 'Bargeld',
            'credit_cart' => 'Kreditkarte / Debitkarte',
            'pay' => 'Zahlen',
            'amount' => 'Menge',
            'standart_exemption' => 'Standardbefreiung',
            'kilometer_package' => 'kilometerpaket',
            'insurance_package' => 'Versicherungspaket',
            'standard_package' => 'Standardpaket',
            'standard' => 'Standard',
            'logo' => 'Logo',
            'tax' => 'Steuer',
            'total' => 'Insgesamt',
            'paid' => 'Bezahlen',
            'subtotal' => 'Zwischensumme',
            'select_car' => 'Auto Auswählen',
            'select_group' => 'Gruppe Auswählen',
            'select_customer' => 'Kunde Auswählen',
            'new_customer' => 'Neukunde',
            'select_date' => 'Datum Auswählen',
            'customer_information' => 'Kundeninformationen',
            'id_card_front' => 'Ausweisfront',
            'id_card_back' => 'ID-Kartenrückseite',
            'id_card_expiry' => 'Ablaufdatum der ID-Karte',
            'driver_card_front' => 'Fahrerkarte vorne',
            'driver_card_back' => 'Rückseite der Fahrerkarte',
            'driver_card_expiry' => 'Ablaufdatum der Fahrerkarte',
            'id_and_driver_Card' => 'Personalausweis und Führerschein',
            'withour_signing' => 'Ohne Unterschrift',
            'signature_text' => 'Klicken Sie hier, um das Signaturboard (im Popup) zu öffnen.',
            'signature_text_2' => 'Nach der Unterzeichnung wird die Signatur hier angezeigt.',
            'list_all_text' => 'Alle Informationen finden Sie hier',
            'selected_car' => 'Ausgewähltes Auto',
            'selected_kilometer_package' => 'Ausgewähltes Kilometerpaket',
            'selected_insurance_package' => 'Ausgewähltes Versicherungspaket',
            'selected_payment_method' => 'Ausgewählte Zahlungsmethode',
            'start_date' => 'Startdatum',
            'end_date' => 'Enddatum',
            'expired' => 'Abgelaufen',
            'used' => 'Gebraucht',
            'tocompare' => 'Vergleichen',
            'picked_up' => 'Abgeholt',
            'triangle_reflector_message' => 'Der Status des Dreieckreflektors unterscheidet sich',
            'reflective_vest_message' => 'Der Status der Warnweste unterscheidet sich',
            'first_aid_kit_message' => 'First Aid Kit status differs',
            'clean_lines_messsage' => 'Der Sauberkeitsstatus ist unterschiedlich',
            'tire_profile_message' => 'Reifenprofil unterscheidet sich',
            'extra_date' => 'Zusatztermin',
            'add' => 'Hinzufügen',
            'creator' => 'Schöpferin',
            'form' => 'Bilden',
            'date' => 'Datum',
            'all' => 'Alle',
            'download_pdf' => 'Als PDF Herunterladen',
            'different_billgin_address' => 'Abweichende Rechnungsadresse',
            'birthday' => 'Geburtstag',
            'age' => 'Alter',
            'billing' => 'Abrechnung',
            'created' => 'erstellt',
            'expires_in_1_day' => 'Läuft in 1 Tag ab',
            'continues' => 'weiter',
            'last_rent' => 'Letzte Miete',
            'no_rentals' => 'Keine Vermietung',
            'not_car_number_plate' => 'Kein Autokennzeichen',
            'add_line' => 'Zeile Hinzufügen',
            'discount' => 'Rabatt',
            'note' => 'Notiz',
            'note_text' => 'Wir hoffen, dass Sie mit Ihrem Mietfahrzeug zufrieden waren. Bei Fragen oder für zukünftige Buchungen stehen wir Ihnen jederzeit gerne zur Verfügung.',
            'save_and_send_invoice' => 'Rechnung speichern und senden',
            'exceeded' => 'überschritten',
            'to_pay' => 'Zu Bezahlen',
            'costs' => 'Kosten',
            'no_new_damages' => 'Keine Neuen Schäden',
            'new_damages_found' => 'Neue Schäden Festgestellt',
            'removed_damages' => 'Beseitigte Schäden',
            'enter' => 'Eingeben',
            'item' => 'Artikel',
            'product' => 'Produkt',
            'action' => 'Aktion',
            'shopping_invoice' => 'Einkaufsrechnung',
            'resend_invoice' => 'Rechnung erneut senden',
            'billing_from' => 'Abrechnung ab',
            'billing_to' => 'Abrechnung an',
            'billing_text' => 'Weitere Informationen finden Sie unter',
            'date_issued' => 'Ausgabedatum',
            'due_date' => 'Fälligkeitsdatum',
            'due_amount' => 'fälliger Betrag',
            'mode_of_payment' => 'Zahlungsart',
            'not_paid' => 'Nicht Bezahlt',
            'await' => 'Erwarten',
            'paymet_text' => 'Bitte achten Sie darauf, die Rechnung innerhalb von 30 Tagen zu bezahlen.',
            'not_completed' => 'Nicht Abgeschlossen',
            'awaiting_approval' => 'Genehmigung steht aus',
            'position' => 'Position',
            'not_found' => 'Nicht Gefunden',
            'send' => 'Schicken',
            'driver' => 'Treiber',
            'corporate' => 'Firmen',
            'relevant' => 'Relevant',
            'recipienti_nstitution' => 'Empfängerinstitution',
            'contact' => 'Kontakt',
            'view' => 'Sicht',
            'review' => 'Rezension',
            'hrb' => 'HRB',
            'bic' => 'bic',
            'iban' => 'Iban',
            'stnr' => 'StNr',
            'ust_id_nr' => 'Ust. Id. Nr.',
            'registry_court' => 'Registry Court',
            'general_manager' => 'Geschäftsführer',
            'login' => 'Login',
            'login_text_1' => 'Vereinfachen Sie Ihre Autovermietungstransaktionen',
            'login_text_2' => 'Es hilft Ihnen, Ihre Autovermietung auf die effizienteste und schnellste Weise zu verwalten. Mit erweiterten Funktionen und einer benutzerfreundlichen Oberfläche können Sie alle Prozesse von der Reservierung bis zur Vertragsverwaltung auf einer einzigen Plattform steuern.',
            'login_text_3' => 'Melden Sie sich an und bringen Sie Ihr Unternehmen auf die nächste Stufe!',
            'welcome_back' => 'Willkommen zurück',
            
        ];
        
        
        // Tüm diller için aynı çeviri değerlerini kullanarak çevirileri oluştur
        $languages = Language::all();
        foreach ($languages as $language) {
            // Çeviriyi oluştur
            Translation::create([
                'language_id' => $language->id,
                'key' => $translationKey->key,
                'value' => $defaultValue[$translationKey->key] ?? '' // Anahtarın değerini al veya null ayarla
            ]);
        }
    }
}
