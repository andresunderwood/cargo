import 'package:firebase_core/firebase_core.dart';
import 'package:flutter/foundation.dart';

Future initFirebase() async {
  if (kIsWeb) {
    await Firebase.initializeApp(
        options: FirebaseOptions(
            apiKey: "AIzaSyBip-egb1umQ0e1C3nclAHYVPfS3gs_QtA",
            authDomain: "myapp-3551b.firebaseapp.com",
            projectId: "myapp-3551b",
            storageBucket: "myapp-3551b.appspot.com",
            messagingSenderId: "1047435392225",
            appId: "1:1047435392225:web:d53d313c6fe26e56e233a0",
            measurementId: "G-5MER48ZKHZ"));
  } else {
    await Firebase.initializeApp();
  }
}
