import { initializeApp } from 'firebase/app'
import { getAuth } from 'firebase/auth'
import { getFirestore } from 'firebase/firestore'
// Replace with the config you just copied
const firebaseConfig = {
  apiKey: 'AIzaSyAvkHn_mn0c3zHXLw4EAZnIAau943oKWvE',
  authDomain: 'cost-cue.firebaseapp.com',
  projectId: 'cost-cue',
  storageBucket: 'cost-cue.firebasestorage.app',
  messagingSenderId: '1004918803369',
  appId: '1:1004918803369:web:ea858a402a0c1068d7d2b8',
  measurementId: 'G-S0KZCZ2C63',
}

const app = initializeApp(firebaseConfig)
export const auth = getAuth(app)
export const db = getFirestore(app)
