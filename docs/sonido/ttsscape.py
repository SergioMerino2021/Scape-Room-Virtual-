import pyttsx3 as tts

text=input("Text: ")
path="voz1.mp3"
engine = tts.init()
engine.save_to_file(text, path )
engine.runAndWait()