using System.Threading.Tasks;
using Discord;
using Discord.WebSocket;

namespace tigotech.UserJoinActions
{
    public class CreatePrivateChannel
    {
        private static DiscordSocketClient _client = Program._client;
        private static ulong ServerId = Program.ServerId;
        private static SocketGuild _server = _client.GetGuild(ServerId);

        public static async Task process(SocketGuildUser user)
        {
            var channel =
                await _server.CreateTextChannelAsync(user.Username,
                    properties =>
                    {
                        properties.CategoryId = 804071891261456394;
                        properties.Topic = "Welcome to tigo.tech! This is your personal chat with tigo";
                    }) as ITextChannel;

            await channel.SyncPermissionsAsync();
            await channel.AddPermissionOverwriteAsync(user,
                new OverwritePermissions(viewChannel: PermValue.Allow, sendMessages: PermValue.Allow,
                    useExternalEmojis: PermValue.Allow));
            await channel.SendMessageAsync(
                "Welcome to tigo.tech! This is your personal chat channel with Tigo, if you made a temporary account for this be sure to claim it");
            await channel.SendMessageAsync(
                "Your discord ID along with the channel ID has been saved to a tigo.tech database to make sure when this channel gets updated you do not lose access");
            await channel.SendMessageAsync(
                "The moment you leave this server or do ``!leave channel`` here we will delete those records, Only the chat (and your username) remains logged for archival purposes");

            // Request to the Headless Mangement CMS to save records for archival purposes and to get IDs when a user left the server. I also might want to save this to local if the request fails
        }
    }
}