using System;
using SFML.Graphics;
using SFML.Window;

namespace LibraryInterface
{
    class Program
    {
        public static RenderWindow window;
        
        static void Main(string[] args)
        {
            window = new RenderWindow(new SFML.Window.VideoMode(800, 600), "Library");
            Game();
        }

        static void Game()
        {
            while(window.IsOpen)
            {
                window.DispatchEvents();
                window.Clear(Color.Red);
                window.Display();
            }
        }
    }
}
