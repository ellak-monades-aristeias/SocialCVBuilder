# Περιγραφή πρότασης

Εκατομμύρια χρηστες έχουν τα επαγγελματικά τους δεδομένα αναρτημένα σε διαφορα κοινωνικά δίκτυα όπως το Facebook, Glassdoor, Linkedin, Google+, MSN και αλλα. Το προτεινόμενο σύστημα παρέχει την δυνατότητα στον χρηστη να μπορεί από ένα κεντρικό λογισμικό τοπικά εγκατεστημένο, να μπορεί να δημιουργήσει βιογραφικό σημείωμα τύπου Europass (και αλλου τύπου) κάνοντας χρήση των υπάρχων δεδομένων του στο διαδίκτυο.

# Προϋποθέσεις για την χρήση του συστήματος:

* Πρόσβαση στο διαδίκτυο (για εισαγωγή δεδομένων από τα κονωνικά δίκτυα).
* Υπάρχει δυνατότητα πλήρης χρήσης του συστήματος χωρίς πρόσβαση της συσκευής στο διαδίκτυο.
* Συσκευή tablet ή κινητό τηλέφωνο τύπου smartphone.
* Προαιρετικά, ύπαρξη λογαριασμού σε κοινωνικά δίκτυα (Παράδειγμα Linkedin).

# Πιο αναλυτικά:
* Τοπική εγκατάσταση για αποφυγή προβολής των προσωπικών δεδομένων.
* Αυτόματη εισαγωγή δεδομένων από κοινωνικά δίκτυα: Linkedin, Facebook, Glassdoor, MSN, Google+, ACN, IEEE.
* Δυνατότητα τροποίησης / προσθήκης /διαγραφής δεδομένων.
* Αυτόματη συμπλήρωση περιοχών μέσα από βάση δεδομένων με λέξεις.
* Αποθήκευση αρχείου σε opensource μορφές αρχείων
* Αποθήκευση βιογραφικού σημειώματος με την μορφή Europass αλλα και αλλου τύπου (Adecco, Manpower, Wipro, Monster και αλλα)
# Παροχές στον χρηστη:
* Απλοποίηση της δημιουργίας βιογραφικού σημειώματος
* Δημιουργία βιογραφικού σημειώματος πολλών τύπων από ένα κεντρικό σύστημα
* Αποθήκευση του βιογραφικού σημειώματος σε διαφορες μορφές αρχείων
* Προστασία των προσωπικών δεδομένων με χρήση μονο των τοπικών πόρων του συστήματος

# Κοινό που απευθύνεται
* Το σύστημα απευθύνεται σε:
* Σε άτομα που αναζητούν εργασία
* Σε γραφεία εύρεσης εργασίας
* Σε εργοδότες και γενικότερα εταιρίες όλων των κλάδων
* Παγκόσμια αγορά (συμπεριλαμβανομενης της ελληνικής)

Η υπηρεσία βρίσκετε στην διεύθυνση: 
http://ellaksocialcv-projects1.rhcloud.com/

[README_DEVELOPERS.md](README_DEVELOPERS.md)

[README_USERS.md](README_USERS.md)
# ΠΑΡΑΔΟΤΕΑ

| Παραδοτέο | Σύντομη περιγραφή | URL |
| 1 | Αγορά υλικού |
| 2 | Οδηγίες (documentation): | |
| 2 | εγκατάστασης προ εγκατάστασης των απαραίτητων λογισμικών και πακέτων στο virtual machine server (apache, php, mysql) | https://github.com/ellak-monades-aristeias/SocialCVBuilder/wiki/Οδηγίες-εγκατάστασης |
| 3 | Λογισμικό (source code): |  |
| 3 | 1. Δημιουργία πηγαίου κώδικα όπου θα αναλαμβάνει το φόρτωμα δεδομένων από τα κοινωνικά δίκτυα |  https://github.com/ellak-monades-aristeias/SocialCVBuilder/blob/master/backend-web-server/assets/js/app/cvbuilder.js |
| 3 | 2. Δημιουργία διαδραστικής εφαρμογής κινητού τηλεφώνου όπου ο χρηστης θα κάνει εισαγωγή και επεξεργασία των δεδομένων |  https://github.com/ellak-monades-aristeias/SocialCVBuilder/blob/master/backend-web-server/output/xml/1443118927Brachos.xml |
| 3 | 3. Δημιουργία πηγαίου κώδικα όπου θα αποθηκεύει τα αποθηκεύει τα δεδομένα σε μορφή βιογραφικού σημειώματος |  https://github.com/ellak-monades-aristeias/SocialCVBuilder/blob/master/backend-web-server/cvxml.php |
| 3 | 4. Δημιουργία πηγαίου κώδικα για αυτόματη επιλογή αποστολής του βιογραφικού σημειώματος σε διεύθυνση ηλεκτρονικού ταχυδρομείου |  https://github.com/ellak-monades-aristeias/SocialCVBuilder/blob/master/backend-web-server/index.php |
| 3 | Οδηγίες (documentation):  5. Αποθήκευση της εφαρμογής σε πακέτα εγκατάστασης για iPhone και Android συσκευές |  https://github.com/ellak-monades-aristeias/SocialCVBuilder/wiki/Building-The-App |









