# menginpor modul tkinter
import tkinter as tk
from tkinter import ttk
import tkinter.messagebox

def main():
    window = tk.Tk()
    window.title("Login Form")
    window.resizable(0,0)

    #variabel untuk username dan password
    username= "faiz"
    password= "123"

    #fungsi login
    def login():
        if entry_username.get() == username and entry_password.get() == password: #entry username dan entry password mengambil di baris 36 dan 38
            tkinter.messagebox.showinfo('Informasi', 'Login Berhasil')
        else:
            #kalo tidak sesuai
            tkinter.messagebox.showinfo("Informasi","Login gagal, Username dan Password tidak sesuai")

    #fungsi exit
    def exit():
        if tkinter.messagebox.askokcancel("Exit", "Apakah Anda ingin keluar?"):   
            window.quit()

    #label username dan password
    label_username = tk.Label(window, text='Username')
    label_username.grid(row=0,column=0)
    label_password = tk.Label(window, text='Password')
    label_password.grid(row=1,column=0)

    #entry username dan password
    entry_username = tk.Entry(window)
    entry_username.grid(row=0, column=1)
    entry_password = tk.Entry(window,show="#")
    entry_password.grid(row=1, column=1)

    #checkbox remember me
    cekbox = tk.Checkbutton(window,text='Remember Me')
    cekbox.grid(row=2,column=0)

    #tombol login dan exit
    button_login = tk.Button(window,width=15,text='Login', command=login)
    button_login.grid(row=3,column=0)
    button_exit = tk.Button(window,width=15,text="Exit",command=exit)
    button_exit.grid(row=3,column=1)
    

    window.mainloop()

if __name__ == "__main__":
    main()
