using System.Threading.Tasks;
using Discord.WebSocket;

namespace tigotech
{
    public class UserLeft
    {
        private static DiscordSocketClient _client = Program._client;
        private static ulong ServerId = Program.ServerId;
        private static SocketGuild _server = _client.GetGuild(ServerId); 
        
        public static async Task HandleLeft(SocketGuildUser user)
        {
            
        }
    }
}