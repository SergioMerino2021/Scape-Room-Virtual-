import pyttsx3 as tts

#text=input("Text: ")
text="Hola, estas en el terminal A12 con el sistema HEROS. Actualmente el sistema está comprometido debido al paso del tiempo. Para la reparación del sistema es necesario la restauración manual."
path="voz1.mp3"
engine = tts.init()
engine.save_to_file(text, path )
engine.runAndWait()