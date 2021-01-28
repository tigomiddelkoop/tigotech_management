using System.Threading.Tasks;
using Discord.WebSocket;
using tigotech.UserJoinActions;

namespace tigotech
{
    public class UserJoined
    {
        private static DiscordSocketClient _client = Program._client;
        private static ulong ServerId = Program.ServerId;
        private static SocketGuild _server = _client.GetGuild(ServerId);

        public static async Task HandleJoin(SocketGuildUser user)
        {
            CreatePrivateChannel.process(user);
        }
    }
}