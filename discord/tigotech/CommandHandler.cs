using System;
using System.Threading.Tasks;
using Discord;
using Discord.WebSocket;

namespace tigotech
{
    public class CommandHandler
    {
        private static DiscordSocketClient _client = Program._client;

        public static async Task HandleCommandAsync(SocketMessage messageParam)
        {
            Console.WriteLine("1");
            var message = messageParam as SocketUserMessage;
            if (message == null || message.Author.Id == _client.CurrentUser.Id || message.Author.IsBot) return;
            Console.WriteLine("2");
            int argPos = 0;

            Console.WriteLine(message.Content + message.Attachments);

            string messageContent = message.Content;

            if (messageContent.StartsWith("!togglerole"))
            {
                Emoji emoji = new Emoji("👍");
                Console.WriteLine(message.Channel.Id);
                try
                {
                    await message.AddReactionAsync(emoji);
                    await message.PinAsync();
                }
                catch (Exception e)
                {
                    Console.WriteLine(e);
                    throw;
                }
            }
        }
    }
}