{extends file="index.tpl"}
{block name="content"}
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        {foreach $list_users as $user}
            <tr>
                <td>{$user.username}</td>
                <td>{$user.password}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{{/block}}