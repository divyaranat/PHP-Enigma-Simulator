# PHP-Enigma-Emulator

This is a program that is meant to emulate the encryption and decryption capabilities of the Enigma Machine utilized in WWII.

## Installation

Since this program is written entirely in PHP, installation of PHP is required.

We will will be using Homebrew for this installation. If you do not have it currently installed, please do so [here](https://brew.sh/) prior to continuing.

1. With Homebrew installed, enter the following into the terminal:
```
brew install php@8.2
```
2. Open your terminal, and navigate to the directory where you would like to keep the program.
4. Once inside the desired directory, enter the following into the terminal;
```
git clone https://github.com/divyaranat/PHP-Enigma-Simulator.git
```
5. Now you should have all the files on your machine.
## Usage
To start the program, first make sure you are in the directory where all the relevant files exist. Then enter the following into the terminal:
```
php Menu.php
```
This will start the program, and will ask you to select three rotors from the five given. Choose any three in any order. However multiples of the same rotor cannot be chosen.

After rotor selection is complete, a menu will display giving you five options:
* 'N' - To encrypt a new message.
* 'D' - To decrypt a message.
* 'S' - To manually set rotor positions.
* 'R' - To reset rotors to default positions.
* 'Q' - To quit the program.

### Encrypting
1. To begin encrypting a new message, type in 'N' and press enter.
2. When prompted begin typing in a message you would like to encrypt and press enter. Only space and letter characters are allowed. (Note: Spaces will be automatically removed.)
3.  Your newly encrypted message will appear. Notice there are 3 letters above the encrypted message. Take note of these. You will need them to decrypt your message.

### Decrypting
1. Type in 'D' and press enter.
2. Enter the three letters that you were given you encrypted your message.
3. Enter your encrypted message when prompted, then press enter. You will see your message decrypted.
